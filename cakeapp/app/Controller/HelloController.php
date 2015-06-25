<?php
App::uses('AppController', 'Controller');

/**
 * HelloController
 */
class HelloController extends AppController {
	public function index() {
		$this->set('greet', 'Hello, World');
	}
}

