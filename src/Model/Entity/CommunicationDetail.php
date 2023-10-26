<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CommunicationDetail Entity
 *
 * @property int $id
 * @property int $student_id
 * @property string $contact_number
 * @property string $email_address
 * @property string $father_contact_no
 * @property string $mother_contact_no
 * @property int $country_id
 * @property string $nationality
 * @property string $address
 * @property int $pincode
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Country $country
 */
class CommunicationDetail extends Entity
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
        'contact_number' => true,
        'email_address' => true,
        'father_contact_no' => true,
        'mother_contact_no' => true,
        'country_id' => true,
        'nationality' => true,
        'address' => true,
        'pincode' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
        'country' => true,
    ];
}
