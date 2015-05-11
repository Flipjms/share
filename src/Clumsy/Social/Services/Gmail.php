<?php namespace Clumsy\Social\Services;

class Gmail extends \Clumsy\Social\Sharer {

	protected $url = 'https://mail.google.com/mail/?view=cm&fs=1&to&ui=2&tf=1&su=:url';
	protected $origin = 'gmail';
}