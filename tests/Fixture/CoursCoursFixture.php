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
        'parent_cour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'child_cour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_COMPATIBLE_COURS1' => ['type' => 'index', 'columns' => ['child_cour_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['parent_cour_id', 'child_cour_id'], 'length' => []],
            'FK_COMPATIBLE_COURS' => ['type' => 'foreign', 'columns' => ['parent_cour_id'], 'references' => ['cours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_COMPATIBLE_COURS1' => ['type' => 'foreign', 'columns' => ['child_cour_id'], 'references' => ['cours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'parent_cour_id' => 1,
            'child_cour_id' => 1
        ],
    ];
}
