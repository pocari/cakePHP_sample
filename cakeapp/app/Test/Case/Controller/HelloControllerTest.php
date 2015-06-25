<?php
App::uses('HelloController', 'Controller');

class HelloControllerTest extends ControllerTestCase {
	public $uses = null;
	public function testIndex() {
		$this->testAction('/hello',
			[
				'return' => 'vars',
			]
		);

		$this->assertEquals(['greet' => 'Hello, World'], $this->vars);
	}
}

