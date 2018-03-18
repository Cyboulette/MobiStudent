<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursContratsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursContratsTable Test Case
 */
class CoursContratsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursContratsTable
     */
    public $CoursContrats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cours_contrats',
        'app.cours',
        'app.contrats',
        'app.diplomes',
        'app.demande_mobilites',
        'app.programmes',
        'app.demande_financieres',
        'app.cours_diplomes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CoursContrats') ? [] : ['className' => CoursContratsTable::class];
        $this->CoursContrats = TableRegistry::get('CoursContrats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursContrats);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
