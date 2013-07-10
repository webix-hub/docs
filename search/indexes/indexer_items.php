<?php

require_once('../../webixstruct.php');

abstract class Item {

	protected $id;
	protected $fields = array();
	protected $name;

	public function set($name, $value) {
		$this->fields[$name] = $value;
	}

	public function get($name) {
		if (isset($this->fields[$name]))
			return $this->fields[$name];
		return null;
	}

	public function name($name) {
		$this->name = $name;
	}

	public function save($file, $index) {
		$fields = array();
		$values = array();
		$item = "<sphinx:document id=\"{$index}\">";
		foreach ($this->fields as $key => $value) {
			$item .= "<{$key}><![CDATA[{$value}]]></{$key}>\n\t\t\t";
		}
		$item .= "</sphinx:document>";
		fwrite($file, $item);
//		file_put_contents($file, file_get_contents($file).$item);
	}

	abstract public function index($config);
}


abstract class ArticleItem extends Item {

	public static function items($config) {
		$items = array();
		$classname = get_called_class();

		$struct = webixStruct::get($config);

		$pages = $struct->pages;
		foreach ($pages as $k => $page) {
			if ($classname::filter($page[0]) === false) continue;	
			$item = new $classname();
			$item->name($item->link2name($page[0]));
			$item->set('link', $page[0]);
			$items[] = $item;
		}
		return $items;
	}

	protected function link2name($link) {
		$name = str_replace("__", "/", $link);
		$name = str_replace(".html", ".md", $name);
		return $name;
	}

	public static function xmlpipe2_start($file) {
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<sphinx:docset>

<sphinx:schema>
<sphinx:field name=\"title\"/> 
<sphinx:field name=\"keywords\"/>
<sphinx:field name=\"content\"/>
<sphinx:attr name=\"link\" type=\"string\" />
<sphinx:attr name=\"title\" type=\"string\" />
</sphinx:schema>";
		fwrite($file, $xml);
//		file_put_contents($file, $xml);
	}

	public static function xmlpipe2_end($file) {
		$xml = "
<sphinx:killlist></sphinx:killlist>
</sphinx:docset>";
//		$data = file_get_contents($file);
//		$data = iconv("UTF-8", "UTF-8//IGNORE", $data);
		fwrite($file, $xml);
//		file_put_contents($file, $data.$xml);
	}

}



class PageItem extends ArticleItem {
	protected $table = "pages";
	protected static function filter($name) {
		if (strpos($name, "__refs__")!==false && strpos($name, "_events") !== false) return false;
		if (strpos($name, "__refs__")!==false && strpos($name, "_methods") !== false) return false;
		if (strpos($name, "__refs__")!==false && strpos($name, "_props") !== false) return false;
		if (strpos($name, "__refs__")!==false && strpos($name, "_other") !== false) return false;
		if (strpos($name, "__refs__")!==false) return true;
		return (strpos($name, "api_") !== 0) ? true : false;
	}

	public function index($config) {
		$mark = webixMark::get($this->name, $config);
		$mark->setLayout("chm.html");

		$title = $mark->getPageTitle($this->name);
		$this->set('title', $title);

		$keywords = $mark->get_var('keyword', true);
		$this->set('keywords', $keywords);

		$content = $mark->render();
		$content = preg_replace("/<pre><code>.*<\/code><\/pre>/sU", "", $content);
		$content = strip_tags($content);
		$this->set('content', $content);
	}
}


class ApiItem extends ArticleItem {
	protected $table = "api";
	protected static function filter($name) {
		if (strpos($name, "__refs__")) return false;
		return (strpos($name, "api_") === 0) ? true : false;
	}

	public function index($config) {
		$mark = webixMark::get($this->name, $config);
		$mark->setLayout("chm.html");

		$title = $mark->getPageTitle($this->name);

		$content = basename($this->name, ".md");
		$type = $this->api_type($content, $title);
		$title = $this->title($content, $title);
		$content = preg_replace("/[_\-\.]/", " ", $content);

		$this->set('title', $title);
		$this->set('content', $content);
		$this->set('type', $type);
	}

	public function title($name, $page_title = false) {
		$name = preg_replace("/(.+)_(methods|method|config|event|events|other)$/", "$1", $name);
		if (substr($name, 0, 1) === '_') $name = "common_".substr($name, 1);
		$name = preg_replace("/[_]/", ".", $name, 1);
		if ($page_title) $name = str_replace(strtolower($page_title), $page_title, $name);
		return $name;
	}

	protected function api_type($name, $page_title) {
		if ($page_title) {
			$page_title = strtolower($page_title);
			$name = str_replace($page_title, str_replace("_", "", $page_title), $name);
		}
		$parts = explode("_", $name);
		if (isset($parts[2])) {
			if ($parts[2] === "config") return "property";
			if ($parts[2] === "event") return "event";
			return "common";
		}
		if (isset($parts[1])) {
			if ($parts[1] === "mixins") return "common";
			if ($parts[1] === "methods") return "method";
			if ($parts[1] === "events") return "event";
			return "method";
		}
		return "common";
	}

	public static function xmlpipe2_start($file) {
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<sphinx:docset>

<sphinx:schema>
<sphinx:field name=\"title\"/> 
<sphinx:field name=\"type\"/>
<sphinx:field name=\"content\"/>
<sphinx:attr name=\"link\" type=\"string\" />
<sphinx:attr name=\"title\" type=\"string\" />
<sphinx:attr name=\"type\" type=\"string\" />
</sphinx:schema>";
		fwrite($file, $xml);
//		file_put_contents($file, $xml);
	}

}



class SampleItem extends Item {
	protected $table = "samples";

	public static function items($config) {
		$items = array();
		$classname = get_called_class();

		$files = $classname::files($config['sample_path']);

		for ($i = 0; $i < count($files); $i++) {
			$file = $files[$i];
			if (pathinfo($file, PATHINFO_EXTENSION) !== 'html') continue;
			$item = new $classname();
			$item->name($config['sample_path'].$file);
			$item->set('link', $file);
			$items[] = $item;
		}
		return $items;
	}

	protected static function files($path, $start = "") {
		$files = array();
		$dir = opendir($path);
		$classname = get_called_class();
		$sep = $start === "" ? "" : "/";
		while(($file = readdir($dir))) {
			if ($file == '.' || $file == '..') continue;
			if (is_file ($path."/".$file))
				$files[] = $start.$sep.$file;
			else if (is_dir($path.'/'.$file))
				$files = array_merge($files, $classname::files($path.'/'.$file, $start.$sep.$file));
		}
		return $files;
	}

	public function index($config) {
		$content = file_get_contents($this->name);
		$title = $this->title($content);
		$methods = $this->methods($content);
		$dsc = $this->description($content);

		$this->set('title', $title);
		$this->set('methods', $methods);
		$this->set('description', $dsc);
	}

	protected function title($content) {
		$match = array();
		preg_match("/<title>(.*)<\/title>/", $content, $match);
		if (isset($match[1])) return $match[1];
		return '';
	}

	protected function methods($content) {
		$match = array();
		preg_match_all("/([\w\d]+)\.([\w\d]+)\(/", $content, $match);
		if (isset($match[2])) return implode(',', $match[2]);
		return '';
	}
	
	protected function description($content) {
		$match = array();
		preg_match_all("/<div class='(header|sample)_comment'>(.*)<\/div>/", $content, $match);
		if (isset($match[2])) return implode(', ', $match[2]);
		return '';
	}

	public static function xmlpipe2_start($file) {
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<sphinx:docset>

<sphinx:schema>
<sphinx:field name=\"title\"/> 
<sphinx:field name=\"methods\"/>
<sphinx:field name=\"description\"/>
<sphinx:attr name=\"link\" type=\"string\" />
<sphinx:attr name=\"title\" type=\"string\" />
</sphinx:schema>";
		fwrite($file, $xml);
//		file_put_contents($file, $xml);
	}
	
	public static function xmlpipe2_end($file) {
		$xml = "
<sphinx:killlist></sphinx:killlist>
</sphinx:docset>";
		fwrite($file, $xml);
//		file_put_contents($file, file_get_contents($file).$xml);
	}

}


?>