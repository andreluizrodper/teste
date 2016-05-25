<?php
include("core/controller.php");
class homeController extends controller{
	public function index(){
		return $this -> render("home/index");
	}
	public function createAccount(){
		
	}
}