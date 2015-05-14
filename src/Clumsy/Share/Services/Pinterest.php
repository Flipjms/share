<?php namespace Clumsy\Share\Services;

class Pinterest extends \Clumsy\Share\BaseShareService {

	protected $url = 'http://pinterest.com/pin/create/button/?url=:url';
	protected $origin = 'pinterest';

	public $acceptedFields = array(
			'image'   => 'media',
			'content' => 'description',
		);
}