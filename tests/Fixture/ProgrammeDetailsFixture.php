<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProgrammeDetailsFixture
 */
class ProgrammeDetailsFixture extends TestFixture
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
                'cource_type_id' => 1,
                'faculty_id' => 1,
                'cource_id' => 1,
                'stream_id' => 1,
                'year' => 1,
                'month_session' => 1,
                'session' => 1,
                'mode_of_study_id' => 1,
                'hostel_facility' => 1,
                'application_fee' => 1,
                'duration' => 1,
                'total_fees' => 1,
                'paying_fees' => 1,
                'created' => '2023-10-26 18:42:16',
                'modified' => '2023-10-26 18:42:16',
            ],
        ];
        parent::init();
    }
}
