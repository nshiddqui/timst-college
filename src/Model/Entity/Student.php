<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $university_id
 * @property string $candidate_name
 * @property string $father_name
 * @property string $mother_name
 * @property \Cake\I18n\FrozenDate $date_of_birth
 * @property string $photo
 * @property int $gender_id
 * @property int $category_id
 * @property int $id_proof_type_id
 * @property string $id_proof_no
 * @property string $document_front
 * @property string $document_back
 * @property bool $are_you_employed
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\University $university
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\IdProofType $id_proof_type
 * @property \App\Model\Entity\CommunicationDetail[] $communication_details
 * @property \App\Model\Entity\ProgrammeDetail[] $programme_details
 * @property \App\Model\Entity\QualificationDetail[] $qualification_details
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
        'university_id' => true,
        'candidate_name' => true,
        'father_name' => true,
        'mother_name' => true,
        'date_of_birth' => true,
        'photo' => true,
        'gender_id' => true,
        'category_id' => true,
        'id_proof_type_id' => true,
        'id_proof_no' => true,
        'document_front' => true,
        'document_back' => true,
        'are_you_employed' => true,
        'created' => true,
        'modified' => true,
        'university' => true,
        'gender' => true,
        'category' => true,
        'id_proof_type' => true,
        'user' => true,
        'communication_detail' => true,
        'programme_detail' => true,
        'qualification_detail' => true,
    ];
}
