<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursDiplomesFixture
 *
 */
class CoursDiplomesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'diplome_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_PROGDIPLOME_COURS' => ['type' => 'index', 'columns' => ['cour_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['diplome_id', 'cour_id'], 'length' => []],
            'FK_PROGDIPLOME_COURS' => ['type' => 'foreign', 'columns' => ['cour_id'], 'references' => ['cours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_PROGDIPLOME_DIPLOMES' => ['type' => 'foreign', 'columns' => ['diplome_id'], 'references' => ['diplomes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'diplome_id' => 1,
            'cour_id' => 1
        ],
    ];
}
