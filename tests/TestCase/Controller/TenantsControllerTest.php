<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TenantsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TenantsController Test Case
 */
class TenantsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tenants',
        'app.countries',
        'app.owners',
        'app.cities',
        'app.states',
        'app.properties',
        'app.types',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.groups_permissions',
        'app.applications',
        'app.units',
        'app.employment',
        'app.rental_history',
        'app.references'
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
