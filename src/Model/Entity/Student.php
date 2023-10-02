<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $image
 * @property string $enrolment_no
 * @property string $applicant_name
 * @property string $father_name
 * @property string $address
 * @property int $state_id
 * @property string $contact
 * @property \Cake\I18n\FrozenDate $date_of_birth
 * @property int $gender_id
 * @property int $university_id
 * @property int $cource_id
 * @property int $cource_fees
 * @property \Cake\I18n\FrozenDate $addmission_date
 * @property int $category_id
 * @property string|null $reference
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\University $university
 * @property \App\Model\Entity\Cource $cource
 * @property \App\Model\Entity\Category $category
 */
class Student extends Entity
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
        'user_id' => true,
        'image' => true,
        'enrolment_no' => true,
        'applicant_name' => true,
        'father_name' => true,
        'address' => true,
        'state_id' => true,
        'contact' => true,
        'date_of_birth' => true,
        'gender_id' => true,
        'university_id' => true,
        'cource_id' => true,
        'cource_fees' => true,
        'addmission_date' => true,
        'category_id' => true,
        'reference' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'state' => true,
        'gender' => true,
        'university' => true,
        'cource' => true,
        'category' => true,
    ];
}
