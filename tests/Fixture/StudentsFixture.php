<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'user_id' => 1,
                'image' => 'Lorem ipsum dolor sit amet',
                'enrolment_no' => 'Lorem ipsum dolor sit amet',
                'applicant_name' => 'Lorem ipsum dolor sit amet',
                'father_name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'state_id' => 1,
                'contact' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => '2023-10-02',
                'gender_id' => 1,
                'university_id' => 1,
                'cource_id' => 1,
                'cource_fees' => 1,
                'addmission_date' => '2023-10-02',
                'category_id' => 1,
                'reference' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-10-02 07:53:40',
                'modified' => '2023-10-02 07:53:40',
            ],
        ];
        parent::init();
    }
}
