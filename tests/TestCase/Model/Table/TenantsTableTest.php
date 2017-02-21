<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TenantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TenantsTable Test Case
 */
class TenantsTableTest extends TestCase
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tenants') ? [] : ['className' => 'App\Model\Table\TenantsTable'];
        $this->Tenants = TableRegistry::get('Tenants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tenants);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
