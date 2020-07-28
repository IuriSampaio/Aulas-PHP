<?php

class Rest{
	public static function open($request){
		$url = explode('/', $_REQUEST['url']);
		var_dump($url);

		$classe =  $url[0];
		array_shift($url);

		$metodo = $url[0];
		array_shift($url);

		$parametros = array();
		$parametros = $url;
	}

}
	if(isset($_REQUEST)){

		Rest:open($_REQUEST);
	}
