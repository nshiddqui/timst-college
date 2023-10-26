<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QualificationDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QualificationDetailsTable Test Case
 */
class QualificationDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QualificationDetailsTable
     */
    protected $QualificationDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.QualificationDetails',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('QualificationDetails') ? [] : ['className' => QualificationDetailsTable::class];
        $this->QualificationDetails = $this->getTableLocator()->get('QualificationDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->QualificationDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QualificationDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\QualificationDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
