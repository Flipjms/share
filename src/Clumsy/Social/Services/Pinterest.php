<?php namespace Clumsy\Social\Services;

class Pinterest extends \Clumsy\Social\Sharer {

	protected $url = 'http://pinterest.com/pin/create/button/?url=:url';
	protected $origin = 'pinterest';
}