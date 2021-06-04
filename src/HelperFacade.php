<?php

namespace Ruslius\Helper;

use Illuminate\Support\Facades\Facade;

class HelperFacade extends Facade //Alias Helper
{
	public static function getFacadeAccessor()
	{
		return 'HelperFacade'; //Вернет строку namspase+classname
	}
}
