<?php
include("core/view.php");
class homeView extends view{
	public function home(){
		return $this -> compile(
			"home.html",
			array(
				"title" => "Books"
			)
		);
	}
}