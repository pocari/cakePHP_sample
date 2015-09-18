<?php
App::uses('Header', 'Model');

/**
 * Header Test Case
 *
 */
class HeaderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.header',
		'app.detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Header = ClassRegistry::init('Header');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Header);

		parent::tearDown();
	}

}
