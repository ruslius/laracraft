<?php

namespace Ruslius\LaraCraft;

use Illuminate\Support\ServiceProvider;

class LaraCraftServiceProvider extends ServiceProvider
{
	protected $configName = "helper";

	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot() //vendor:publish
	{
		$this->publishes(
		  [
		  __DIR__ . '/../configs/' . $this->configName . '/.php' => config_path($this->configName . '.php'),
		  ]
		);
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(__DIR__ . '/../configs/' . $this->configName . '.php', $this->configName);

		$this->app->bind('HelperContainer', LaraCraft::class);
	}
}
