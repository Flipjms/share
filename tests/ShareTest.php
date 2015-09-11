<?php

use Clumsy\Share\Facade;
 
class ShareTest extends TestCase {
 
	public function test_one_by_one_available_services_with_default_options()
	{

		$expected = '<a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u='.rawurlencode('http://workbench.local').'" target="_blank"></a>';
		$facebook = Share::facebook();

		$this->assertEquals($facebook,$expected);

	}
 
}