<?php namespace Clumsy\Share\Services;

class Tumblr extends \Clumsy\Share\BaseShareService {

	protected $url = 'http://www.tumblr.com/share?v=3&u=:url';
	protected $origin = 'tumblr';

	public $acceptedFields = array(
			'title' => 't', 
		);
}