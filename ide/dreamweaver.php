<?php

class dreamweaverDriver {

	public function toString($classes) {
		$types = array();
		$hash = array();
		foreach ($classes as $name => $class) {
			$hash[] = $this->get_class($class, $name);
			$types[] = "<return-type type=\"{$name}\"/>";
		}
		$template = file_get_contents('./ide/templates/dreamweaver.tpl');
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
			'methods' => implode("\n", $methods),
			'props' => implode("\n", $props)
		);
		$template = "<menu classpattern=\"webix.#name#\" casesensitive=\"true\" displayrestriction=\"JavaScript\" additionaldismisschars=\".;\">
		<method pattern=\"webix.#name#\"	source=\"Javascript\" icon=\"shared/mm/images/hintFunction.png\" constructor=\"true\"/>
#methods#
#props#
	</menu>";
		return $this->template($template, $obj);
	}

	protected function method($method, $classname) {
		$template = "		<method pattern=\"#name#(#paramslist#)\" source=\"JavaScript\" icon=\"shared/mm/images/hintFunction.png\" retType=\"webix.#classname#\" />
		<method pattern=\"#name#(#paramslist#)\" source=\"JavaScript\" static=\"true\" icon=\"shared/mm/images/hintFunction.png\" retType=\"webix.#classname#\" />";

		$paramslist = array();
		for ($i = 0; $i < count($method['params']); $i++)
			$paramslist[] = $method['params'][$i]['name'];
		$method['paramslist'] = implode(", ", $paramslist);
		$method['classname'] = $classname;

		return $this->template($template, $method);
	}


	protected function prop($prop) {
		$template = "		<property label=\"#name#\"	source=\"DHTMLX\" icon=\"shared/mm/images/hintProperty.png\"/>
		<property label=\"#name#\" source=\"DHTMLX\" icon=\"shared/mm/images/hintProperty.png\" static=\"true\" />";

		return $this->template($template, $prop);
	}


	protected function param($param) {
		$template = "<parameter name=\"#name#\" type=\"#type#\" usage=\"#optional#\">";
		$template .= "<description>#descr#</description>";
		$template .= "</parameter>";

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