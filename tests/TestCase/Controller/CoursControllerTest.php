<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CoursController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CoursController Test Case
 */
class CoursControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cours',
        'app.contrats',
        'app.diplomes',
        'app.cours_diplomes',
        'app.demande_mobilites',
        'app.programmes',
        'app.demande_financieres',
        'app.cours_contrats',
        'app.cours_cours'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
