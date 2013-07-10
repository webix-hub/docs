<?php
 
class Editor {
	protected $key_handler = "editor/sources/handler.js";
	protected $editor_page = "editor/sources/editor.html";
	protected $editor_template = "editor/sources/editor_area.html";
	protected $data_folder = "./data/";
	protected $inline_content = "#CONTENT#";
	protected $inline_title = "#TITLE#";
	protected $editor_area = "#EDITOR_AREA#";
	protected $editor_id = "#ID#";
	protected $primary_editor_call = "#EDITOR#";
	protected $linked_editor_call = "#SECOND#";
	protected $linked_page_name = "#LINK#";
	protected $link_pattern = "/@link:(.*)\.md/";
	protected $pageName;
	public function addListener(){

		return "<script type='text/javascript' src='".$this->key_handler."'></script>";
	}

	protected function encodePath($path){
		$output = $path;
		if(strpos($path, "__") !== false){
			$output = implode("/",explode("__",$path));
		}
		return $output;
	}

	protected function getContent($pageName, $lang){
		if ($lang) $lang = ".".$lang;

		$filename = $this->data_folder.$this->encodePath($pageName).$lang.".md";
		if(is_file($filename))
			$pageContent = file_get_contents($filename);
		else{
			if ($lang != ""){
				$filename = $this->data_folder.$this->encodePath($pageName).".md";
				if(is_file($filename))
					return file_get_contents($filename);
			}
			$pageContent = "";
		}
		return $pageContent;
	}

	public function render($page, $lang = ""){
		$template = file_get_contents($this->editor_page);
		$pageContent = $this->getContent($page, $lang);

		$pagename = $lang ? ($lang."/".$page) : $page;
		$template = str_replace($this->inline_title, $pagename, $template);
		$primary_editor_name = "code";

		$template = str_replace($this->primary_editor_call, $primary_editor_name, $template);
		$editor = $this->getEditorArea($pageContent, "Page : <span>".$this->encodePath($page).".md</span>", $primary_editor_name);

		$link = $this->getLink($pageContent);
		$linked_editor_name = "";
		if($link){
			$linked_editor_name = "linked";
			$pageContent = $this->getContent($link, $lang);
			$editor .= $this->getEditorArea($pageContent, "@link : <span>{$link}.md</span>", $linked_editor_name);
		}

		$link = str_replace("/","__",$link);
		$link = $lang ? ($lang."/".$link) : $link;
		$template = str_replace($this->linked_page_name, $link, $template);
		$template = str_replace($this->linked_editor_call, $linked_editor_name, $template);

		$template = str_replace($this->editor_area, $editor, $template);

		return $template;
	}

	protected function getLink($content){
		$match = array();
		if(!preg_match($this->link_pattern, $content, $match))
			return "";
		return trim($match[1]);

	}

	protected function getEditorArea($content, $title, $id){
		$template = file_get_contents($this->editor_template);

		$code = array("code"=>$content);

		$json = json_encode($code);//, JSON_UNESCAPED_UNICODE);
		$code = $id."_config = ".$json.";";

		$template = str_replace($this->inline_content, $code, $template);
		$template = str_replace($this->inline_title, $title, $template);
		$template = str_replace($this->editor_id, $id, $template);


		return $template;
	}



	protected function preparePath($file){
		$folders = explode('/', $file);
		$path = '';
		if(count($folders) > 1)
			for($i = 0; $i < count($folders) - 1; $i++){
				$path .= $folders[$i] ."/";
				if(!is_dir($path) ){
					mkdir($path);
				}
			}
		return $path;
	}

	public function save($page, $content, $redirect = true){

		$savepage = $page;
		// ru/some => some.ru.md
		$lang = explode("/",$page);
		if (sizeof($lang)>1)
			$savepage = $lang[1].".".$lang[0];

		$target = $this->data_folder."/".$this->encodePath($savepage).".md";
		$this->preparePath($target);

		file_put_contents($target, $content);
		if($redirect){
			header("Location: $page.html");
			exit();
		}
	}


}
