<?php namespace Clumsy\Share;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class BaseShareService {

	protected function queryStringAdd($url, $key, $value = '')
	{
		$url = preg_replace('/(.*)(\?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&');
		$url = substr($url, 0, -1);
		
		$value = $value ? "=".rawurlencode($value) : '';
		
		if (strpos($url, '?') === false)
		{
		    return ($url . '?' . $key . $value);
		}
		else
		{
		    return ($url . '&' . $key . $value);
		}
	}

	public function share($url_to_share = null, $data = array(), $view = null)
	{
		if ($url_to_share == null) {
			$url_to_share = Request::url();
		}

		$url = $this->url;

		foreach ($data as $key => $value)
		{
			$url = $this->queryStringAdd($url, $key, $value);
		}

		if ($view == null)
		{
			$view = View::exists("clumsy/share::{$this->origin}") ? "clumsy/share::{$this->origin}" : 'clumsy/share::template';
		}

		$url = str_replace(':url', rawurlencode($url_to_share), $url);

		return View::make($view, array('url' => $url, 'class' => $this->origin))->render();
	}
}