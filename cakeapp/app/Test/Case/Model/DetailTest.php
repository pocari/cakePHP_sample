<?php
App::uses('Detail', 'Model');

/**
 * Detail Test Case
 *
 */
class DetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detail',
		'app.header'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Detail = ClassRegistry::init('Detail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detail);

		parent::tearDown();
	}

}
