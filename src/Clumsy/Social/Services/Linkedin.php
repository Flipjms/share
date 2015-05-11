<?php namespace Clumsy\Social\Services;

class Linkedin extends \Clumsy\Social\Sharer {

	protected $url = 'http://www.linkedin.com/shareArticle?mini=true&url=:url';
	protected $origin = 'linkedin';
}