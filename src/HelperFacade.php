<?php

namespace Ruslius\Helper;

use Ruslius\Helper\HelperClient;
use Illuminate\Support\Facades\Facade;

class HelperFacade extends Facade //Alias Helper
{
	public static function getFacadeAccessor()
	{
		return 'HelperClient'; //В
	}
}
