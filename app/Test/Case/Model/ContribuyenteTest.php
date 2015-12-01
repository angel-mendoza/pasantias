<?php
App::uses('Contribuyente', 'Model');

/**
 * Contribuyente Test Case
 */
class ContribuyenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contribuyente',
		'app.empresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contribuyente = ClassRegistry::init('Contribuyente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contribuyente);

		parent::tearDown();
	}

}
