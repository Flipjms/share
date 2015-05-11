<?php namespace Clumsy\Share\Services;

class Linkedin extends \Clumsy\Share\BaseShareService {

	protected $url = 'http://www.linkedin.com/shareArticle?mini=true&url=:url';
	protected $origin = 'linkedin';
}