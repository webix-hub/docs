<?php
/*
	id = md5(url)

	pages - hash by page id, holds array or [url, header, parentid]
	index - hash by keyword, stores array of related pages (ids)
	navs - hash by id, stores array of sub pages (ids)
	sections - array by id, stores array of sections in page as [link name, header name]
*/

require_once("docobot.php");

class webixStruct{
	public static function get($config){
		if (webixStruct::$normalize === true) 
			return null;
		
		if (webixStruct::$instance === false){
			webixStruct::$normalize = true;
			webixStruct::$instance = new webixStruct($config);
			webixStruct::$normalize = false;	
		}

		return webixStruct::$instance;
	}
	private static $instance = false;
	private static $normalize = false;



	function __construct($config){
		@$file = dirname(__FILE__)."/temp/__".$config["startpage"].".pxt";
		if (!file_exists($file)){ 
			if (!array_key_exists("startpage", $config)){
				$this->sections = $this->pages = $this->index = $this->navs = array();
				return $this;	
			} else {
				$bot = new DocoBot($config);
				$bot->normalize();
			}
		}

		$struct = unserialize(file_get_contents($file));

		$this->pages = &$struct["pages"];
		$this->index = &$struct["index"];
		$this->navs = &$struct["navs"];
		$this->sections = &$struct["sections"];

		$this->config = $config;
	}
	function getParentLine($id, $exclude){
		$result = array();
		if ($exclude) 
			$id = $this->getParent($id);

		while ($id !== 0){
			if ($id === null) return null;
			$result[] = $id;
			$id = $this->getParent($id);
		}
		return array_reverse($result);
	}
	function getSiblingLine($id){
		if (array_key_exists($id, $this->navs))
			return $this->navs[$id];
		else
			return null;
	}
	function getChildLine($id){
		if (array_key_exists($id, $this->navs))
			return $this->navs[$id];
		else
			return null;
	}
	function getSectionsLine($id){
		if (array_key_exists($id, $this->sections))
			return $this->sections[$id];
		return null;
	}
	function getParent($id){
		if (array_key_exists($id, $this->pages))
			return $this->pages[$id][2];
		return null;
	}
	function getTitle($id){
		return $this->pages[$id][1];
	}
	function getTop(){
		return md5($this->config["startpage"]);
	}
	function getURL($id){
		return $this->pages[$id][0];
	}
	function isExists($page){
		if (array_key_exists(md5($page), $this->pages))
			return true;
		return false;	
	}
}
?>