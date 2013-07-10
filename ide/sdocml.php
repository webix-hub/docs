<?php

class sdocmlDriver {

	public function toString($classes) {
		$types = array();
		$hash = array();
		foreach ($classes as $name => $class) {
			$hash[] = $this->get_class($class, $name);
			$types[] = "<return-type type=\"{$name}\"/>";
		}
		$template = file_get_contents('./ide/templates/sdocml.tpl');
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
			$methods[] = $this->method($class['methods'][$i]);
		for ($i = 0; $i < count($class['props']); $i++)
			$props[] = $this->prop($class['props'][$i]);
		
		$obj = array(
			'name' => $name,
			'methods' => implode("\n", $methods),
			'props' => implode("\n", $props)
		);
		$template = "	<class type=\"#name#\">
	    <description>#name#</description>
	    <constructors></constructors>
	    <methods>
			#methods#
		</methods>
	</class>
	<class type=\"#name#.config\">
		<properties>
			#props#
		</properties>
	</class>";
		return $this->template($template, $obj);
	}

	protected function method($method) {
		$template = "<method name=\"#name#\" scope=\"instance\">";
		$template .= "<description>#dsc#</description>";
		$template .= "<parameters>";
		$template .= "#params#";
		$template .= "</parameters>";
		$template .= "<example>#example#</example>";
		$template .= "<return-types><return-type type=\"#return#\"/></return-types>";
		$template .= "</method>";

		for ($i = 0; $i < count($method['params']); $i++)
			$method['params'][$i] = $this->param($method['params'][$i]);
		$method['params'] = implode("", $method['params']);


		return $this->template($template, $method);
	}


	protected function prop($prop) {
		$template = "					<property name=\"#name#\" type=\"#type#\" scope=\"instance\" access=\"read-write\">
					<description>#dsc#</description>
				</property>";

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