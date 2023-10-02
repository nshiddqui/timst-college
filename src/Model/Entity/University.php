<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * University Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $state_id
 * @property string|null $contact
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Student[] $students
 */
class University extends Entity
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
        'name' => true,
        'address' => true,
        'state_id' => true,
        'contact' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'state' => true,
        'user' => true,
        'students' => true,
    ];
}
