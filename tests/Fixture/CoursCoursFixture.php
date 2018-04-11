<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursCoursFixture
 *
 */
class CoursCoursFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'linked_cour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_COMPATIBLE_COURS1' => ['type' => 'index', 'columns' => ['linked_cour_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cour_id', 'linked_cour_id'], 'length' => []],
            'FK_COMPATIBLE_COURS' => ['type' => 'foreign', 'columns' => ['cour_id'], 'references' => ['cours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_COMPATIBLE_COURS1' => ['type' => 'foreign', 'columns' => ['linked_cour_id'], 'references' => ['cours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'cour_id' => 1,
            'linked_cour_id' => 1
        ],
    ];
}
