<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModeOfStudiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModeOfStudiesTable Test Case
 */
class ModeOfStudiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModeOfStudiesTable
     */
    protected $ModeOfStudies;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ModeOfStudies',
        'app.ProgrammeDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ModeOfStudies') ? [] : ['className' => ModeOfStudiesTable::class];
        $this->ModeOfStudies = $this->getTableLocator()->get('ModeOfStudies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ModeOfStudies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ModeOfStudiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
