<?php namespace Clumsy\Social;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class Social {

	protected static $namespace = "\\Clumsy\\Social\\Services\\";

	public static function batch($services = null, $arguments = array())
	{
		$services = $services == null ? Config::get('clumsy/social::services') : $services;

		$buffer = '';
		foreach ($services as $service) {
			$service = static::$namespace.studly_case($service);

			$service = new $service;

			$buffer .= call_user_func_array(array($service, 'share'), $arguments);
		}

		return $buffer;
	}

	public function __call($name ,$arguments)
	{
		$service = static::$namespace.studly_case($name);

		$service = new $service;

		return call_user_func_array(array($service, 'share'), $arguments);
	}
}