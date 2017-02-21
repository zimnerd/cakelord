<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RentalHistoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RentalHistoryTable Test Case
 */
class RentalHistoryTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rental_history',
        'app.tenants',
        'app.owners',
        'app.countries',
        'app.properties',
        'app.types',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.groups_permissions',
        'app.cities',
        'app.states',
        'app.employment',
        'app.units',
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
        $config = TableRegistry::exists('RentalHistory') ? [] : ['className' => 'App\Model\Table\RentalHistoryTable'];
        $this->RentalHistory = TableRegistry::get('RentalHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RentalHistory);

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
