<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommunicationDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommunicationDetailsTable Test Case
 */
class CommunicationDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommunicationDetailsTable
     */
    protected $CommunicationDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CommunicationDetails',
        'app.Students',
        'app.Countries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CommunicationDetails') ? [] : ['className' => CommunicationDetailsTable::class];
        $this->CommunicationDetails = $this->getTableLocator()->get('CommunicationDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CommunicationDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CommunicationDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CommunicationDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
