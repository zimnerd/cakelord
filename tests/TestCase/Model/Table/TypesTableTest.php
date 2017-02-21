<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesTable Test Case
 */
class TypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.types',
        'app.applications',
        'app.tenants',
        'app.countries',
        'app.owners',
        'app.cities',
        'app.states',
        'app.properties',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.groups_permissions',
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
        $config = TableRegistry::exists('Types') ? [] : ['className' => 'App\Model\Table\TypesTable'];
        $this->Types = TableRegistry::get('Types', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Types);

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
}
