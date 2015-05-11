<?php namespace Clumsy\Share\Services;

class Twitter extends \Clumsy\Share\BaseShareService {

	protected $url = 'https://twitter.com/intent/tweet?url=:url';
	protected $origin = 'twitter';
}