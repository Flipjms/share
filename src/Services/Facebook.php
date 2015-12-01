<?php

namespace Clumsy\Share\Services;

class Facebook extends \Clumsy\Share\BaseShareService
{

    protected $url = 'https://www.facebook.com/sharer/sharer.php?u=:url';
    protected $origin = 'facebook';

    public $acceptedFields = array(
            'title' => 'title',
        );
}
