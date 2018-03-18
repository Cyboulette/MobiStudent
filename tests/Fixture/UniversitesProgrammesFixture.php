<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UniversitesProgrammesFixture
 *
 */
class UniversitesProgrammesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'universite_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'programme_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_IMPLIQUE_PROGRAMMES' => ['type' => 'index', 'columns' => ['programme_id'], 'length' => []],
            'FK_IMPLIQUE_UNIVERSITES_idx' => ['type' => 'index', 'columns' => ['universite_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['universite_id', 'programme_id'], 'length' => []],
            'FK_IMPLIQUE_PROGRAMMES' => ['type' => 'foreign', 'columns' => ['programme_id'], 'references' => ['programmes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_IMPLIQUE_UNIVERSITES' => ['type' => 'foreign', 'columns' => ['universite_id'], 'references' => ['universites', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'universite_id' => 1,
            'programme_id' => 1
        ],
    ];
}
