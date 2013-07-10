<?php

class vsdocDriver {

	public function toString($classes) {
		$types = array();
		$hash = array();
		foreach ($classes as $name => $class) {
			$hash[] = $this->get_class($class, $name);
		}
		$template = file_get_contents('./ide/templates/vsdoc.tpl');
		$obj = array(
			'name' => $name,
			'classes' => implode("\n\n", $hash)
		);
		return $this->template($template, $obj);
	}
	
	protected function get_class($class, $name) {
		$methods = array();
		for ($i = 0; $i < count($class['methods']); $i++)
			$methods[] = $this->method($class['methods'][$i], $name);
		for ($i = 0; $i < count($class['props']); $i++)
			$props[] = $this->prop($class['props'][$i], $name);

		$obj = array(
			'name' => $name,
			'methods' => implode("\n\n\n", $methods),
			'props' => implode("\n", $props)
		);
		$template = "webix.#name# = {
	///	<summary>
	/// 
	///	</summary>
};
webix.#name#.config = {};
#props#
#methods#";

		return $this->template($template, $obj);
	}

	protected function method($method, $classname) {
		$template = "webix.#classname#.#name# = function(#paramslist#) {
	/// <summary>
	///		#dsc#
	///		#example#
	///	</summary>
#params#
	///	<returns type=\"#return#\" />
};";

		$paramslist = array();
		for ($i = 0; $i < count($method['params']); $i++) {
			$paramslist[] = $method['params'][$i]['name'];
			$method['params'][$i] = $this->param($method['params'][$i]);
		}
		$method['params'] = implode("\n", $method['params']);
		if (empty($method['params'])) $method['params'] = '	/// ';
		$method['paramslist'] = implode(", ", $paramslist);
		$method['classname'] = $classname;

		if (isset($method['example'])){
			$method['example'] = strip_tags($method['example']);
			$method['example'] = html_entity_decode($method['example']);
			$method['example'] = str_replace("Example", "Example: ", $method['example']);
			$ex = explode("\n", $method['example']);
			for ($i = 1; $i < count($ex); $i++)
				$ex[$i] = "	/// ".$ex[$i];
			$method['example'] = implode("\n", $ex);
		}
		return $this->template($template, $method);
	}


	protected function prop($prop, $classname) {
		$template = "/// #dsc#
webix.#classname#.config.#name# = '';";
//		$template = "webix.#classname#.config.#name# = '';";
		$prop['classname'] = $classname;
		return $this->template($template, $prop);
	}


	protected function param($param) {
		$template = "	/// <param name=\"#name#\" type=\"#type#\">
	///		#descr#
	/// </param>";
		return $this->template($template, $param);
	}

	protected function template($tpl, $obj) {
		preg_match_all("/#(.+)#/U", $tpl, $matches);
		$result = $tpl;
		if (isset($matches))
			for ($i = 0; $i < count($matches[0]); $i++) {
				$name = $matches[1][$i];
				if (isset($obj[$name]))
					$result = str_replace($matches[0][$i], $obj[$name], $result);
			}

		return $result;
	}
}

?>