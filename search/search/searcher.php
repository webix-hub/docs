<?php

require_once(dirname(__FILE__)."/sphinxapi.php");
require_once(dirname(__FILE__)."/cache.php");


class Search {
	protected $cl;
	protected $config;
	protected $starttime;
	protected $without_cache = false;

	public function __construct($config) {
		$this->config = $config;
		$this->cl = new SphinxClient ();
		$this->cl->SetServer($this->config['host'], $this->config['port']);
		$this->cl->SetMatchMode(SPH_MATCH_EXTENDED);
		$this->cl->SetConnectTimeout(3);
		$this->cl->SetArrayResult(true);
		$this->starttime = microtime();

		$this->without_cache = $config['without_cache'];
		$this->cache = new SearchCache($config);
		$this->prepare_templates("templates");
	}

	protected function prepare_templates() {
		$content = $this->template('search');

		$tpls = array();
		preg_match_all("/====webix_tpl_begin====:(.*)\n(.*)====webix_tpl_end====/sU", $content, $tpls);
		$this->tpls = array();
		for ($i = 0; $i < count($tpls[1]); $i++) {
			$name = trim($tpls[1][$i]);
			$tpl = trim($tpls[2][$i]);
			$this->tpls[$name] = $tpl;
		}
	}

	protected function template($name) {
		if (isset($this->tpls[$name])) return $this->tpls[$name];
		$filename = realpath($this->config["template_dir"].$name.'.html');
		
		if (file_exists($filename))
			return file_get_contents($filename);
		return "";
	}

	public function replace_vars($content, $vars = false, $value = false) {
		if (func_num_args() > 2)
			$this->vars = array($vars => $value);
		else if ($vars)
			$this->vars = $vars;
		$content = preg_replace_callback('/\$\$(\w+)\??/', array($this, "replace_vars_callback"), $content);
		return $content;
	}

	public function replace_vars_callback($matches) {
		$varname = $matches[1];
		if (isset($this->vars[$varname]))
			return $this->vars[$varname];
		
		return $matches[0];
	}



	protected function query($query, $index, $limit_start = 0, $limit_count = 10) {
		if ($query === false) return false;
		if ($limit_start < 0) $limit_start = 0;
		if ($limit_count < 0) $limit_count *= -1;
		$this->cl->setLimits($limit_start, $limit_count);
		$query = $this->prepare_word($query);
		$res = $this->cl->Query($query, $index);
		return $res;
	}

	protected function prepare_word($query) {
		$query = trim($query);
		$query = preg_split("/[^\w\d]/", $query);
		for ($i = 0; $i < count($query); $i++)
			$query[$i] = "({$query[$i]}|{$query[$i]}*)";
		$query = implode('&', $query);
		return $query;
	}

	protected function links($res) {
		$links = array();
		if ($res === false || !(isset($res['matches']))) return $links;
		$pages = $res['matches'];
		for ($i = 0; $i < count($pages); $i++) {
			$links[] = $pages[$i]['attrs'];
		}
		return $links;
	}

	protected function total($res) {
		return (isset($res['total_found'])) ? $res['total_found'] : 0;
	}



	protected function paging($page, $total, $per_page) {
		$number = ceil($total/$per_page);
		if ($total <= $per_page) return "";

		$tpl_normal = $this->template('paging_normal');
		$tpl_active = $this->template('paging_active');
		$link = 'search.php?query='.urlencode($this->config['search_word']).'&page=';

		$items = array();
		for ($i = 0; $i < $number; $i++) {
			$tpl = ($i == $page) ? $tpl_active : $tpl_normal;
			$item = $this->replace_vars($tpl, array(
				'link' => $link.($i),
				'number' => $i + 1
			));
			$items[] = $item;
		}


		$tpl = $this->template('paging');
		$paging = $this->replace_vars($tpl, array(
			'links' => implode("", $items)
		));
		return $paging;
	}

	protected function paging_btn($type, $link, $condition) {
		if ($condition) {
			$tpl = $this->template('paging_btn');
			$tpl = $this->replace_vars($tpl, array(
				'link' => "<a href=\"$link\"></a>",
				'type' => $type
			));
		} else {
			$tpl = $this->template('paging_btn');
			$tpl = $this->replace_vars($tpl, array(
				'link' => '<a></a>',
				'type' => $type.' inactive'
			));
		}
		return $tpl;
	}



	public function render() {
		$content = $this->template('search_layout');
		$query = $this->config['search_word'];

		if (isset($_GET['viewall'])) {
			if ($_GET['viewall'] === "api") {
				$articles = $samples = '';
				$api = $this->render_api($query, true);
			} else if ($_GET['viewall'] === "samples") {
				$articles = $api = '';
				$samples = $this->render_samples($query, true);
			}
		} else {
			$articles = $this->render_pages($query);
			if (!isset($_GET["page"]) || $_GET["page"] == 0){
				$samples = $this->render_samples($query);
				$api = $this->render_api($query);
			} else {
				$api = $samples = "";
			}
		}

		$this->vars = array(
			'search_word' => $query,
			'search_articles' => $articles,
			'search_api' => $api,
			'search_samples' => $samples
		);

		$data = $articles.$api.$samples;
		if (strlen($data) === 0) {
			$this->vars['search_articles'] = $this->template('nothing');
			$this->vars['rendertime'] = '';
		}
		
		$reg = '/\$(\w+)\??/';

		$content = $this->replace_vars($content);

		$content = $this->rendertime($content);
		return $content;
	}

	
	protected function rendertime($content) {
		$rendertime = microtime() - $this->starttime;
		if ($rendertime < 0) $rendertime = $this->faketime();
		$render = $this->template('rendertime');
		$rendertime = $this->replace_vars($render, 'rendertime', round($rendertime, 3));
		$content = $this->replace_vars($content, 'rendertime', $rendertime);
		return $content;
	}

	protected function faketime() {
		$rendertime = '0';
		$time = rand(1, 20)/102;
		$time = sprintf("%.5f", $time);
		return $time;
	}


	protected function render_pages($query) {
		$page = isset($_GET['page']) ? (int) $_GET['page'] : 0;
		$page = abs($page);

		if ($this->without_cache === false) {
			$cache = $this->cache->check(array('pages', $query, $page));
			if ($cache) return $cache;
		}

		$tpl = $this->template('articles');
		$item_tpl = $this->template('article_item');
		$res = $this->query($query, "pages", $page*$this->config['articles_number'], $this->config['articles_number']);
		$pages = $this->links($res);
		$total = $this->total($res);
		$paging = $this->paging($page, $total, $this->config['articles_number']);
		if (count($pages) === 0) return "";

		$dir = $this->config['docdir'];
		$url = $this->config['docurl'];

		for ($i = 0; $i < count($pages); $i++) {
			$content = file_get_contents($dir.'/'.$pages[$i]['link']);
			$content = $this->page_content($content);
			preg_match("/<!-- Content Area -->(.*)<!-- Content Area_end -->/Us", $content, $tmp);
			if (isset($tmp[1])) $content = $tmp[1];
			$content = str_replace("<a href='#top' class='webixdoc_backtop'>Back to top</a>", "", $content);
			$pages[$i] = $this->replace_vars($item_tpl, array(
				'link' => $url.$pages[$i]['link'],
				'title' => $pages[$i]['title'],
				'content' => $this->textwrap($content, $query, 5)
			));
		}
		$result = $this->replace_vars($tpl, array(
			'dataset' => implode("", $pages),
			'paging' => $paging
		));
		$result = $this->render_details($result, count($pages), $page, $this->config['articles_number'], $total, 'articles');
		$this->cache->add(array('pages', $query, $page), $result);
		return $result;
	}


	protected function render_api($query, $all = false) {
		if ($this->without_cache === false) {
			$cache = $this->cache->check(array('api', $query, $all));
			if ($cache) return $cache;
		}

		$tpl = $this->template('api');
		$item_tpl = $this->template('api_item');
		$limit = $all ? 1000 : $this->config['api_number'];
		$res = $this->query($query, "api", 0, $limit);
		$pages = $this->links($res);
		$total = $this->total($res);
		if (count($pages) === 0) return "";

		$url = $this->config['docurl'];

		for ($i = 0; $i < count($pages); $i++) {
			$vars = array(
				'link' => $url.$pages[$i]['link'],
				'title' => $pages[$i]['title'],
				'icon' => $pages[$i]['type']
			);
			$pages[$i] = $this->replace_vars($item_tpl, $vars);
		}

		$result = $this->replace_vars($tpl, 'dataset', implode("", $pages));
		$per_page = $all ? $total : $this->config['api_number'];
		$result = $this->render_details($result, count($pages), 0, $per_page, $total, 'api', $all);

		$this->cache->add(array('api', $query, $all), $result);
		return $result;
	}

	protected function render_samples($query, $all = false) {
		if ($this->without_cache === false) {
			$cache = $this->cache->check(array('samples', $query, $all));
			if ($cache) return $cache;
		}

		$tpl = $this->template('samples');
		$item_tpl = $this->template('samples_item');
		$limit = $all ? 1000 : $this->config['samples_number'];
		$res = $this->query($query, "samples", 0, $limit);
		$pages = $this->links($res);
		$total = $this->total($res);
		if (count($pages) === 0) return "";

		$url = $this->config['sampleurl'];

		for ($i = 0; $i < count($pages); $i++) {
			$pages[$i] = $this->replace_vars($item_tpl, array(
				'link' => $url.$pages[$i]['link'],
				'title' => $pages[$i]['title']
			));
		}

		$result = $this->replace_vars($tpl, 'dataset', implode("", $pages));
		$per_page = $all ? $total : $this->config['samples_number'];
		$result = $this->render_details($result, count($pages), 0, $per_page, $total, 'samples');

		$this->cache->add(array('samples', $query, $all), $result);
		return $result;
	}

	
	protected function render_details($content, $pages, $page, $per_page, $total, $type, $no_viewall = false) {
		if ($pages < $total && !$no_viewall) {
			$link = 'search.php?query='.urlencode($this->config['search_word']).'&viewall='.$type;
			$viewall = $this->replace_vars($this->template('viewall'), array( 'link' => $link ));
		} else
			$viewall = "";

		$result = $this->replace_vars($content, array(
			'viewall' => $viewall,
			'shown' => $this->render_per_page($page, $per_page, $total),
			'total_found' => $total,
			'entries' => ($pages > 1) ? 'entries are shown' : 'entry is shown'
		));
		return $result;
	}

	protected function render_per_page($page, $per_page, $total) {
		$start = $page*$per_page + 1;
		$end = min(($page + 1)*$per_page, $total);
		if ($start == $end) return $start;
		return $start." - ".$end;
	}

	protected function page_content($content) {
		$result = $content;
		$result = preg_replace("/<pre>.*<code>.*<\/code>.*<\/pre>/Us", "", $result);
		$result = preg_replace("/<script>.*<\/script>/Us", "", $result);
		$result = preg_replace("/<h1>.*<\/h1>/i", "", $result);
		return $result;
	}


	protected function textwrap($text, $key, $words_limit, $keys_limit = 3) {
		$result = array();
		$text = $this->strip_tags($text);
		$text = str_replace("\n", " ", $text);
		$text = str_replace("\r", " ", $text);
		$text = str_replace("\t", " ", $text);

		$regexp = "/\w*".str_replace("/", "\\/", $key)."\w*/i";
		$keys = array();
		preg_match_all($regexp, $text, $keys);
		if (!isset($keys[0])) return $text;
		$keys = $keys[0];
		for ($i = 0; $i < count($keys); $i++)
			$keys[$i] = "<span class=\"search_select\">{$keys[$i]}</span>";

		$parts = preg_split($regexp, $text);

		for ($i = 0; $i < count($parts); $i++) {
			$regsep = "/[ ,.]+/";
			$part = $parts[$i];
			$words = preg_split($regsep, $part);

			if (count($words) <= $words_limit*2) continue;
			$sep = array();
			preg_match_all($regsep, $part, $sep);
			$sep = $sep[0];

			$len_start = 0;
			for ($j = 0; $j < count($words) && $j <= $words_limit; $j++)
				$len_start += strlen($words[$j]) + (isset($sep[$j]) ? strlen($sep[$j]) : 0);

			$len_end = 0;
			$empty = 0;
			for ($j = count($words) - 1; $j >=0 && count($words) - $j <= $words_limit + $empty; $j--) {
				if (empty($words[$j])) $empty++;
				$len_end += strlen($words[$j]) + (isset($sep[$j - 1]) ? strlen($sep[$j - 1]) : 0);
			}
			$parts[$i] = substr($part, 0, $len_start)." ... ".substr($part, $len_end*-1);
		}
		$text = "";
		for ($i = 0; $i < count($keys) && $i < $keys_limit; $i++)
			$text .= $parts[$i].$keys[$i];
		$text .= $parts[$i];
		return $text;
	}


	protected function strip_tags($text) {
		$text = preg_replace("/<[^>]+>/s", " ", $text);
		return $text;
	}

}

?>