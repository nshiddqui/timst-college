<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourcesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourcesTable Test Case
 */
class CourcesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CourcesTable
     */
    protected $Cources;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cources',
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
        $config = $this->getTableLocator()->exists('Cources') ? [] : ['className' => CourcesTable::class];
        $this->Cources = $this->getTableLocator()->get('Cources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cources);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CourcesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
