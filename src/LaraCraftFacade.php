<?php

namespace Ruslius\LaraCraft;

use Illuminate\Support\Facades\Facade;

class LaraCraftFacade extends Facade //Alias LaraCraft
{
	public static function getFacadeAccessor()
	{
		return 'HelperContainer'; //
	}
}
