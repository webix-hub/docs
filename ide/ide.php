<?php

require_once("./webixmark.php");

class IDE {

	public function __construct() {
		require('./config.php');
		$this->config = $config;
	}

	public function get($driver, $component) {
		$links = $this->links($component);
		$result = $driver->toString(array($component => $links));
		return $result;
	}



	protected function links($component) {
		$methods = $this->abstract_links("api__refs__{$component}_methods.html");
		$methods = $this->methods($methods);
		$props = $this->abstract_links("api__refs__{$component}_props.html");
		$props = $this->props($props);
		return array(
			'methods' => $methods,
			'props' => $props
		);
	}

	protected function abstract_links($main) {
		$mark = webixMark::get($main, $this->config);
		$index = $mark->get_var('indexStruct');
		$links = array();
		for ($i = 0; $i < count($index->child); $i++)
			$links[] = $this->file2link($index->child[$i]->file);
		return $links;
	}

	protected function getName($mark, $link) {
		$name = $mark->getPageTitle($this->link2file($link));
		return $name;
	}

	protected function getDsc($mark, $link) {
		$dsc = $mark->get_var('short!', true);
		return $dsc;
	}

	protected function getExample($mark, $link) {
		$example = $mark->get_var('example', true);
		return $example;
	}
	
	protected function getReturn($mark, $link) {
		$return = $mark->get_var('returns', true);
		if (isset($return['type']) && is_array($return['type']))
			return $this->safeType(implode("|", $return['type']));
		return "void";
	}

	protected function getParams($mark, $link) {
		$ps = $mark->get_var('params', true);
		$params = array();
		if (!empty($ps)) {
			for ($i = 0; $i < count($ps['_keys']); $i++) {
				$key = $ps['_keys'][$i];
				$param = $ps[$key];
				if ($param["name"] == "class")
					$param["name"] = "css_class";
				
				$param['type'] = $this->safeType(implode(',', $param['type']));
				$params[] = $param;
			}
		}
		return $params;
	}

	protected function safeType($type){
		if (strpos($type, ",") !== false)
			return "string";
		if (strpos($type, "/") !== false)
			return "string";
		if ($type=="int" || $type=="number" || $type=="float")
			return "Number";

		return $type;
	}
	protected function getType($mark, $link) {
		$type = $mark->get_var('type', true);
		return $this->safeType($type);
	}

	protected function methods($links) {
		$methods = array();
		for ($i = 0; $i < count($links); $i++)
			$methods[] = $this->item($links[$i], array('name', 'dsc', 'example', 'params', 'return'));
		return $methods;
	}


	protected function props($links) {
		$props = array();
		for ($i = 0; $i < count($links); $i++)
			$props[] = $this->item($links[$i], array('name', 'dsc', 'type', 'example'));
		return $props;
	}


	protected function events($links) {
		$events = array();
		for ($i = 0; $i < count($links); $i++)
			$events[] = $this->item($links[$i], array('name', 'dsc', 'example'));
		return $events;
	}

	protected function item($page, $fields) {
		$mark = webixMark::get($page, $this->config);
		$link = $mark->get_var('link', true);
		if (!empty($link)) return $this->item($this->file2link($link), $fields);

		$item = array();
		for ($i = 0; $i < count($fields); $i++) {
			$field = $fields[$i];
			$method = 'get'.ucfirst($field);
			if (method_exists($this, $method)) {
				$item[$field] = $this->$method($mark, $page);
			}
		}
		return $item;
	}


	protected function file2link($file) {
		$link = str_replace('/', '__', $file);
		$link = str_replace('.md', '.html', $link);
		return $link;
	}
	
	protected function link2file($link) {
		$file = str_replace('__', '/', $link);
		$file = str_replace('.html', '.md', $file);
		return $file;
	}
}

?>