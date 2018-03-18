<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursContratsFixture
 *
 */
class CoursContratsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contrat_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_COMPOSERCONTRAT_CONTRATS' => ['type' => 'index', 'columns' => ['contrat_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cour_id', 'contrat_id'], 'length' => []],
            'FK_COMPOSERCONTRAT_CONTRATS' => ['type' => 'foreign', 'columns' => ['contrat_id'], 'references' => ['contrats', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_COMPOSERCONTRAT_COURS' => ['type' => 'foreign', 'columns' => ['cour_id'], 'references' => ['cours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'contrat_id' => 1
        ],
    ];
}
