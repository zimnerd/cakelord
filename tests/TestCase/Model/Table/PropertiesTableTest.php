<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertiesTable Test Case
 */
class PropertiesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.properties',
        'app.types',
        'app.owners',
        'app.countries',
        'app.states',
        'app.tenants',
        'app.units',
        'app.cities',
        'app.employment',
        'app.rental_history',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.groups_permissions',
        'app.applications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Properties') ? [] : ['className' => 'App\Model\Table\PropertiesTable'];
        $this->Properties = TableRegistry::get('Properties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Properties);

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
