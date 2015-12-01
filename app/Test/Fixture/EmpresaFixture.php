<?php
/**
 * Empresa Fixture
 */
class EmpresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numeroCatastral' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'razonSocial' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'rif' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'ramo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'fechaSolicitud' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'contribuyente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'inmueble_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'numeroCatastral' => 1,
			'razonSocial' => 'Lorem ipsum dolor sit amet',
			'rif' => 1,
			'telefono' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'ramo' => 'Lorem ipsum dolor sit amet',
			'fechaSolicitud' => '2015-12-01 05:50:52',
			'created' => '2015-12-01 05:50:52',
			'modified' => '2015-12-01 05:50:52',
			'user_id' => 1,
			'contribuyente_id' => 1,
			'inmueble_id' => 1
		),
	);

}
