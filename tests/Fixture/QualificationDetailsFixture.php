<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QualificationDetailsFixture
 */
class QualificationDetailsFixture extends TestFixture
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
                'secondary_year_of_passing' => 'Lorem ipsum dolor sit amet',
                'sr_secondary_year_of_passing' => 'Lorem ipsum dolor sit amet',
                'graduation_year_of_passing' => 'Lorem ipsum dolor sit amet',
                'post_graduation_year_of_passing' => 'Lorem ipsum dolor sit amet',
                'other_year_of_passing' => 'Lorem ipsum dolor sit amet',
                'secondary_university' => 'Lorem ipsum dolor sit amet',
                'sr_secondary_university' => 'Lorem ipsum dolor sit amet',
                'graduation_university' => 'Lorem ipsum dolor sit amet',
                'post_graduation_university' => 'Lorem ipsum dolor sit amet',
                'other_university' => 'Lorem ipsum dolor sit amet',
                'secondary_percentage' => 'Lorem ipsum dolor sit amet',
                'sr_secondary_percentage' => 'Lorem ipsum dolor sit amet',
                'graduation_percentage' => 'Lorem ipsum dolor sit amet',
                'post_graduation_percentage' => 'Lorem ipsum dolor sit amet',
                'other_percentage' => 'Lorem ipsum dolor sit amet',
                'secondary_documents' => 'Lorem ipsum dolor sit amet',
                'sr_secondary_documents' => 'Lorem ipsum dolor sit amet',
                'graduation_documents' => 'Lorem ipsum dolor sit amet',
                'post_graduation_documents' => 'Lorem ipsum dolor sit amet',
                'other_documents' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-10-26 18:41:53',
                'modified' => '2023-10-26 18:41:53',
            ],
        ];
        parent::init();
    }
}
