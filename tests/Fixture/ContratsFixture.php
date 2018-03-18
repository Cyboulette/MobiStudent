<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratsFixture
 *
 */
class ContratsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'diplome_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'demande_mobilite_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'programme_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'duree' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'etat' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'ordre' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_CONTRATS_DEMANDESMOBILITES' => ['type' => 'index', 'columns' => ['demande_mobilite_id'], 'length' => []],
            'FK_CONTRATS_PROGRAMMES' => ['type' => 'index', 'columns' => ['programme_id'], 'length' => []],
            'FK_CONTRATS_DIPLOMES_idx' => ['type' => 'index', 'columns' => ['diplome_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_CONTRATS_DEMANDESMOBILITES' => ['type' => 'foreign', 'columns' => ['demande_mobilite_id'], 'references' => ['demande_mobilites', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_CONTRATS_DIPLOMES' => ['type' => 'foreign', 'columns' => ['diplome_id'], 'references' => ['diplomes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_CONTRATS_PROGRAMMES' => ['type' => 'foreign', 'columns' => ['programme_id'], 'references' => ['programmes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'diplome_id' => 1,
            'demande_mobilite_id' => 1,
            'programme_id' => 1,
            'duree' => 1,
            'etat' => 'Lorem ipsum dolor sit amet',
            'ordre' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
