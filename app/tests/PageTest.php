<?php

class PageTest extends TestCase {

	public function test_home_page_exists()
	{
		$this->call('GET', '/');
		$this->assertResponseOk();
	}

	public function test_login_page_exists()
	{
		$this->call('GET', 'login');
		$this->assertResponseOk();
	}

}
