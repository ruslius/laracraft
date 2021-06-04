<?php

namespace Ruslius\Helper;

class HelperClient
{
	public static function dump($arr){
		echo("<pre>");
			print_r($arr);
		echo("</pre>");
	}
	public function getInfo(){
		return config()->all();
	}
}
