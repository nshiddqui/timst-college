<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QualificationDetail Entity
 *
 * @property int $id
 * @property int|null $student_id
 * @property string|null $secondary_year_of_passing
 * @property string|null $sr_secondary_year_of_passing
 * @property string|null $graduation_year_of_passing
 * @property string|null $post_graduation_year_of_passing
 * @property string|null $other_year_of_passing
 * @property string|null $secondary_university
 * @property string|null $sr_secondary_university
 * @property string|null $graduation_university
 * @property string|null $post_graduation_university
 * @property string|null $other_university
 * @property string|null $secondary_percentage
 * @property string|null $sr_secondary_percentage
 * @property string|null $graduation_percentage
 * @property string|null $post_graduation_percentage
 * @property string|null $other_percentage
 * @property string|null $secondary_documents
 * @property string|null $sr_secondary_documents
 * @property string|null $graduation_documents
 * @property string|null $post_graduation_documents
 * @property string|null $other_documents
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Student $student
 */
class QualificationDetail extends Entity
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
        'secondary_year_of_passing' => true,
        'sr_secondary_year_of_passing' => true,
        'graduation_year_of_passing' => true,
        'post_graduation_year_of_passing' => true,
        'other_year_of_passing' => true,
        'secondary_university' => true,
        'sr_secondary_university' => true,
        'graduation_university' => true,
        'post_graduation_university' => true,
        'other_university' => true,
        'secondary_percentage' => true,
        'sr_secondary_percentage' => true,
        'graduation_percentage' => true,
        'post_graduation_percentage' => true,
        'other_percentage' => true,
        'secondary_documents' => true,
        'sr_secondary_documents' => true,
        'graduation_documents' => true,
        'post_graduation_documents' => true,
        'other_documents' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
    ];
}
