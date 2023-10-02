<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniversitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniversitiesTable Test Case
 */
class UniversitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UniversitiesTable
     */
    protected $Universities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Universities',
        'app.States',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('Universities') ? [] : ['className' => UniversitiesTable::class];
        $this->Universities = $this->getTableLocator()->get('Universities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Universities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UniversitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UniversitiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
