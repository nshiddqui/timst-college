<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProgrammeDetail Entity
 *
 * @property int $id
 * @property int $student_id
 * @property int $cource_type_id
 * @property int $faculty_id
 * @property int $cource_id
 * @property int $stream_id
 * @property int $year
 * @property int $month_session
 * @property int $session
 * @property int $mode_of_study_id
 * @property bool $hostel_facility
 * @property int $application_fee
 * @property int|null $duration
 * @property int|null $total_fees
 * @property int|null $paying_fees
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\CourceType $cource_type
 * @property \App\Model\Entity\Faculty $faculty
 * @property \App\Model\Entity\Cource $cource
 * @property \App\Model\Entity\Stream $stream
 * @property \App\Model\Entity\ModeOfStudy $mode_of_study
 */
class ProgrammeDetail extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'student_id' => true,
        'cource_type_id' => true,
        'faculty_id' => true,
        'cource_id' => true,
        'stream_id' => true,
        'year' => true,
        'month_session' => true,
        'session' => true,
        'mode_of_study_id' => true,
        'hostel_facility' => true,
        'application_fee' => true,
        'duration' => true,
        'total_fees' => true,
        'paying_fees' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
        'cource_type' => true,
        'faculty' => true,
        'cource' => true,
        'stream' => true,
        'mode_of_study' => true,
    ];
}
