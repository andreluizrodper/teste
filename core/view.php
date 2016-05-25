<?php
class view{
	public function compile($template, $data){
		$file = file_get_contents("templates/{$template}");
		foreach($data as $k => $v)
			$file = str_replace("{{$k}}", $v, $file);
		return $file;
	}
}