<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DemandeMobilitesFixture
 *
 */
class DemandeMobilitesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'etudiant_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'diplome_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_depot' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'etat' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_DEMANDESMOBILITES_ETUDIANTS' => ['type' => 'index', 'columns' => ['etudiant_id'], 'length' => []],
            'FK_DEMANDESMOBILITES_DIPLOMES' => ['type' => 'index', 'columns' => ['diplome_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_DEMANDESMOBILITES_DIPLOMES' => ['type' => 'foreign', 'columns' => ['diplome_id'], 'references' => ['diplomes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_DEMANDESMOBILITES_ETUDIANTS' => ['type' => 'foreign', 'columns' => ['etudiant_id'], 'references' => ['etudiants', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'etudiant_id' => 1,
            'diplome_id' => 1,
            'date_depot' => '2018-03-18 20:08:51',
            'etat' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
