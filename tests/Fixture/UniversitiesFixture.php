<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UniversitiesFixture
 */
class UniversitiesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'state_id' => 1,
                'contact' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-10-02 11:59:50',
                'modified' => '2023-10-02 11:59:50',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
