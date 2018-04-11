<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursCoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursCoursTable Test Case
 */
class CoursCoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursCoursTable
     */
    public $CoursCours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cours_cours',
        'app.cours',
        'app.contrats',
        'app.diplomes',
        'app.universites',
        'app.programmes',
        'app.universites_programmes',
        'app.demande_mobilites',
        'app.etudiants',
        'app.cours_diplomes',
        'app.demande_financieres',
        'app.cours_contrats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CoursCours') ? [] : ['className' => CoursCoursTable::class];
        $this->CoursCours = TableRegistry::get('CoursCours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursCours);

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
