<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModeOfStudiesFixture
 */
class ModeOfStudiesFixture extends TestFixture
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
                'created' => '2023-10-26 21:06:05',
                'modified' => '2023-10-26 21:06:05',
            ],
        ];
        parent::init();
    }
}
