<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LendTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LendTable Test Case
 */
class LendTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LendTable
     */
    public $Lend;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Lend',
        'app.Users',
        'app.Books',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lend') ? [] : ['className' => LendTable::class];
        $this->Lend = TableRegistry::getTableLocator()->get('Lend', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lend);

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
