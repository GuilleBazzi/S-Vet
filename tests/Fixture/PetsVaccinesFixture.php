<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PetsVaccinesFixture
 *
 */
class PetsVaccinesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_pet' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_vaccine' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'expiration_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_pet' => ['type' => 'index', 'columns' => ['id_pet'], 'length' => []],
            'id_vaccine' => ['type' => 'index', 'columns' => ['id_vaccine'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'pets_vaccines_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_pet'], 'references' => ['pets', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'pets_vaccines_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_vaccine'], 'references' => ['vaccines', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'id_pet' => 1,
            'id_vaccine' => 1,
            'date' => '2017-11-19',
            'expiration_date' => '2017-11-19',
            'created' => '2017-11-19 20:40:21',
            'modified' => '2017-11-19 20:40:21'
        ],
    ];
}
