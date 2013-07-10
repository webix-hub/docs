<?php

require_once('./search/cache.php');

class Suggests {

	protected $drivers;
	protected $config;

	public function __construct($config) {
		$this->config = $config;
		$this->cache = new SearchCache($config);
	}

	public function driver($driver) {
		$this->drivers[] = $driver;
	}

	public function suggest($query, $preffer) {
		$this->query = $query;
		$cache_name = array('suggest', $query);
		if ($this->config['without_cache'] === false) {
			$cache = $this->cache->check($cache_name);
			if ($cache) return $cache;
		}
		$result = "[]";
		if (!$query) return $result;
		for ($i = 0; $i < count($this->drivers); $i++) {
			$this->drivers[$i]->load($this->config);
			$words = $this->drivers[$i]->suggest($query, $preffer);
			$words = $this->limit($words);
			if (count($words) > 0) {
				$result = $this->toString($words, $query);
				break;
			};
		}
		$this->cache->add($cache_name, $result);
		return $result;
	}

	protected function toString($words){
		return json_encode($words);
	}

	function search_select($matches) {
		$query = $this->query;
		if (count($matches) === 4)
			return $matches[1].str_replace($query, "<span class='search_select'>".$query."</span>", $matches[2]).$matches[3];
		return $matches[0];
	}

	protected function limit($words) {
		if ($this->config['suggests_limit'] === null) return $words;
		$words = array_splice($words, 0, $this->config['suggests_limit']);
		return $words;
	}
}



class APISuggestDriver {

	protected $words;
	protected $config;

	public function load($config) {
		require_once('./search/sphinxapi.php');
		$this->cl = new SphinxClient ();
		$this->cl->SetServer($config['host'], $config['port']);
		$this->cl->SetMatchMode(SPH_MATCH_EXTENDED);
		$this->cl->SetArrayResult(true);
		$this->config = $config;
	}

	public function suggest($query, $preffer) {
		$original = $query;

		$query = trim($query);
		$query = preg_split("/[^\w\d]/", $query);
		for ($i = 0; $i < count($query); $i++)
			$query[$i] = "({$query[$i]}|{$query[$i]}*)";
		$query = implode('&', $query);

		$this->cl->SetSortMode(SPH_SORT_ATTR_DESC, "sort");
		$this->cl->SetMatchMode(SPH_MATCH_EXTENDED);
		$res = $this->cl->Query($query, "autocomplete");

		$result = array();
		if ($res === false) return $result;
		if (!isset($res['matches'])) return $result;
		$matches = $res['matches'];

		for ($i = 0; $i < count($matches); $i++) {
			$word = array(
				'name' => $matches[$i]['attrs']['name'],
				'label' => $matches[$i]['attrs']['label'],
				'short' => $matches[$i]['attrs']['short'],
				'type' => $matches[$i]['attrs']['type']
				
			);
			$result[] = $word;
		}
		return $result;
	}

	protected function order($words) {
		$repeat = true;
		while($repeat) {
			$repeat = false;
			for ($i = 1; $i < count($words); $i++) {
				$prev = $words[$i - 1];
				$next = $words[$i];
				if (($prev['pos'] > $next['pos']) || ($prev['pos'] === $next['pos'] && $prev['name'] > $next['name'])) {
					$words[$i - 1] = $next;
					$words[$i] = $prev;
					$repeat = true;
				}
			}
		}
		return $words;
	}

}



class ArticlesSuggestDriver {

	protected $words;
	protected $config;

	public function load($config) {
		require_once('./search/sphinxapi.php');
		$this->cl = new SphinxClient ();
		$this->cl->SetServer($config['host'], $config['port']);
		$this->cl->SetMatchMode(SPH_MATCH_EXTENDED);
		$this->cl->SetArrayResult(true);
		$this->config = $config;
	}

	public function suggest($query, $preffer) {
		$original = $query;

		$query = trim($query);
		$query = preg_split("/[^\w\d]/", $query);
		for ($i = 0; $i < count($query); $i++)
			$query[$i] = "({$query[$i]}|{$query[$i]}*)";
		$query = implode('&', $query);
		
		$res = $this->cl->Query($query, "pages");

		$opts = array (
			"before_match"		=> "<span class=\"search_select\">",
			"after_match"		=> "</span>",
			"chunk_separator"	=> " ... ",
			"limit"				=> 60,
			"around"			=> 5,
		);

		$result = array();
		if ($res === false) return $result;
		if (!isset($res['matches'])) return $result;
		$matches = $res['matches'];

		for ($i = 0; $i < count($matches); $i++) {
			$title = $matches[$i]['attrs']['title'];
			$link = $matches[$i]['attrs']['link'];
			$content = file_get_contents($this->config['docdir'].'/'.$link);

			preg_match("/<!-- Content Area -->(.*)<!-- Left Navigation -->/Us", $content, $tmp);
			if (isset($tmp[1])) $content = $tmp[1];
			$content = preg_replace("/<style>(.*)<\/style>/Us", "", $content);
			$content = str_replace("<a href='#top' class='webixdoc_backtop'>Back to top</a>", "", $content);

			$content = strip_tags($content);
			$short = $this->cl->BuildExcerpts(array($content), "pages", $original, $opts);
			$short = isset($short[0]) ? $short[0] : "";
			$short = str_replace("\n", "", $short);
			$short = trim($short);

			$word = array(
				'name' => $link,
				'label' => $title,
				'short' => $short,
				'type' => 'article'
				
			);
			$result[] = $word;
		}
		return $result;
	}

	protected function order($words) {
		$repeat = true;
		while($repeat) {
			$repeat = false;
			for ($i = 1; $i < count($words); $i++) {
				$prev = $words[$i - 1];
				$next = $words[$i];
				if (($prev['pos'] > $next['pos']) || ($prev['pos'] === $next['pos'] && $prev['name'] > $next['name'])) {
					$words[$i - 1] = $next;
					$words[$i] = $prev;
					$repeat = true;
				}
			}
		}
		return $words;
	}

}


?>