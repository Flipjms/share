<?php namespace Clumsy\Share\Services;

class Gmail extends \Clumsy\Share\BaseShareService {

	protected $url = 'https://mail.google.com/mail/?view=cm&fs=1&to&ui=2&tf=1&su=:url';
	protected $origin = 'gmail';
}