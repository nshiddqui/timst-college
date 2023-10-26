<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommunicationDetailsFixture
 */
class CommunicationDetailsFixture extends TestFixture
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
                'student_id' => 1,
                'contact_number' => 'Lorem ipsum dolor sit amet',
                'email_address' => 'Lorem ipsum dolor sit amet',
                'father_contact_no' => 'Lorem ipsum dolor sit amet',
                'mother_contact_no' => 'Lorem ipsum dolor sit amet',
                'country_id' => 1,
                'nationality' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'pincode' => 1,
                'created' => '2023-10-26 18:42:28',
                'modified' => '2023-10-26 18:42:28',
            ],
        ];
        parent::init();
    }
}
