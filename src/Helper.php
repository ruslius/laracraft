<?php

namespace Ruslius\Helper;

use Illuminate\Support\Facades\Log;

class Helper
{
	protected $construct;

	public function __construct()
	{
		Log::info("Был выполнен __construct");
	}

	public static function preEcho($arr){
		echo("<pre>");
			print_r($arr);
		echo("</pre>");
	}
	public static function getInfo(){
		Log::info("Был выполнен getInfo");
		return config()->all();
	}
	public static function ifConstruct(){
		//return $this->construct;
	}
}
