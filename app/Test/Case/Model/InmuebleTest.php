<?php
App::uses('Inmueble', 'Model');

/**
 * Inmueble Test Case
 */
class InmuebleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inmueble',
		'app.empresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inmueble = ClassRegistry::init('Inmueble');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inmueble);

		parent::tearDown();
	}

}
