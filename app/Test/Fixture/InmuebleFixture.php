<?php
/**
 * Inmueble Fixture
 */
class InmuebleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ubicacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'numero' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sector' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'areaTerreno' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'areaContruccion' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'ubicacion' => 'Lorem ipsum dolor sit amet',
			'numero' => 1,
			'sector' => 'Lorem ipsum dolor sit amet',
			'areaTerreno' => 1,
			'areaContruccion' => 1,
			'created' => '2015-12-01 05:46:49',
			'modified' => '2015-12-01 05:46:49'
		),
	);

}
