<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UniversitesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UniversitesController Test Case
 */
class UniversitesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.universites',
        'app.diplomes',
        'app.contrats',
        'app.demande_mobilites',
        'app.etudiants',
        'app.programmes',
        'app.universites_programmes',
        'app.demande_financieres',
        'app.cours',
        'app.cours_contrats',
        'app.cours_diplomes'
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
