<?php namespace Clumsy\Social\Services;

class Twitter extends \Clumsy\Social\Sharer {

	protected $url = 'https://twitter.com/intent/tweet?url=:url';
	protected $origin = 'twitter';
}