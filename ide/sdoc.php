<?php

class sdocDriver {

	public function toString($classes) {
		$types = array();
		$hash = array();
		foreach ($classes as $name => $class) {
			$hash[] = $this->get_class($class, $name);
			$types[] = "<return-type type=\"{$name}\"/>";
		}
		$template = file_get_contents('./ide/templates/sdoc.tpl');
		$obj = array(
			'name' => $name,
			'types' => implode('', $types),
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
			'props' => implode(",\n\n\t", $props)
		);
		$template = "webix.#name# = {};
webix.#name#.config = {
	#props#
};

#methods#
";

		return $this->template($template, $obj);
	}

	protected function method($method, $classname) {
		$template = "/**
 * #dsc#
 * @method #name# #params#
 * @returns {#return#} #return#
 */
 webix.#classname#.#name# = function(#paramslist#) {};";

		$paramslist = array();
		for ($i = 0; $i < count($method['params']); $i++) {
			$paramslist[] = $method['params'][$i]['name'];
			$method['params'][$i] = $this->param($method['params'][$i]);
		}
		$method['params'] = implode("\n", $method['params']);
		if ($method['params'] !== "") $method['params'] = "\n".$method['params'];

		$method['classname'] = $classname;
		$method['paramslist'] = implode(", ", $paramslist);

		return $this->template($template, $method);
	}


	protected function prop($prop, $classname) {
		$template = "/**
	 * #dsc#
	 * @id webix.#classname#.config.#name#
	 * @type #type#
	 */
	#name#: ''";
		$prop['classname'] = $classname;
		return $this->template($template, $prop);
	}


	protected function param($param) {
		$template = " * @param {#type#} #name# #descr#";
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