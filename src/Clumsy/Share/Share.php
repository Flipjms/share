<?php namespace Clumsy\Share;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class Share {

	protected static $namespace = "\\Clumsy\\Share\\Services\\";

	protected function resolveService($name, $arguments)
	{
		$service = static::$namespace.studly_case($name);

		$service = new $service;

		return call_user_func_array(array($service, 'share'), $arguments);
	}

	public function batch($url_to_share = null, $data = array(), $view = null, $services = null)
	{
		$services = $services == null ? Config::get('clumsy/share::services') : $services;

		$buffer = '';
		foreach ($services as $service) {
			$buffer .= $this->resolveService($service, func_get_args());
		}

		return $buffer;
	}

	public function __call($name ,$arguments)
	{
		return $this->resolveService($name, $arguments);
	}
}