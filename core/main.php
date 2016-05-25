<?php
class app{
	public function __construct(){
		if(empty($_GET["r"])){
			include_once("src/controller/home.php");
			$home = new homeController();
			return $home -> index();
		}else{
			$route = explode("/", $_GET["r"]);
			include_once("src/controller/" . $route[0] . ".php");
			$route[0] = $route[0] . "Controller";
			$class = new $route[0]();
			return $class -> $route[1]();
		}
	}
}