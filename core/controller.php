<?php
class controller{
	public function render($data){
		$data = explode("/", $data);
		include("src/view/" . $data[0] . ".php");
		$data[0] = $data[0] . "Controller";
		$class = new $data[0]();
		return $class -> $data[1]();
	}
}