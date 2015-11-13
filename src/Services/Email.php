<?php namespace Clumsy\Share\Services;

class Email extends \Clumsy\Share\BaseShareService {

	protected $url = 'mailto:?body=:url';
	protected $origin = 'email';

	public $acceptedFields = array(
			'title'     => 'subject',
			'mail_body' => 'body',
		);
}