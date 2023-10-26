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
                'university_id' => 1,
                'candidate_name' => 'Lorem ipsum dolor sit amet',
                'father_name' => 'Lorem ipsum dolor sit amet',
                'mother_name' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => '2023-10-26',
                'photo' => 'Lorem ipsum dolor sit amet',
                'gender_id' => 1,
                'category_id' => 1,
                'id_proof_type_id' => 1,
                'id_proof_no' => 'Lorem ipsum dolor sit amet',
                'document_front' => 'Lorem ipsum dolor sit amet',
                'document_back' => 'Lorem ipsum dolor sit amet',
                'are_you_employed' => 1,
                'created' => '2023-10-26 18:51:49',
                'modified' => '2023-10-26 18:51:49',
            ],
        ];
        parent::init();
    }
}
