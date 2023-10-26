<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdProofTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdProofTypesTable Test Case
 */
class IdProofTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdProofTypesTable
     */
    protected $IdProofTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.IdProofTypes',
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
        $config = $this->getTableLocator()->exists('IdProofTypes') ? [] : ['className' => IdProofTypesTable::class];
        $this->IdProofTypes = $this->getTableLocator()->get('IdProofTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->IdProofTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IdProofTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
