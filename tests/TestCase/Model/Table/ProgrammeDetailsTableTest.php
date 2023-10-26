<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgrammeDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgrammeDetailsTable Test Case
 */
class ProgrammeDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgrammeDetailsTable
     */
    protected $ProgrammeDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProgrammeDetails',
        'app.Students',
        'app.CourceTypes',
        'app.Faculties',
        'app.Cources',
        'app.Streams',
        'app.ModeOfStudies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProgrammeDetails') ? [] : ['className' => ProgrammeDetailsTable::class];
        $this->ProgrammeDetails = $this->getTableLocator()->get('ProgrammeDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProgrammeDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProgrammeDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProgrammeDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
