<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @property \App\Model\Table\UniversitiesTable&\Cake\ORM\Association\BelongsTo $Universities
 * @property \App\Model\Table\GendersTable&\Cake\ORM\Association\BelongsTo $Genders
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\IdProofTypesTable&\Cake\ORM\Association\BelongsTo $IdProofTypes
 * @property \App\Model\Table\CommunicationDetailsTable&\Cake\ORM\Association\HasMany $CommunicationDetails
 * @property \App\Model\Table\ProgrammeDetailsTable&\Cake\ORM\Association\HasMany $ProgrammeDetails
 * @property \App\Model\Table\QualificationDetailsTable&\Cake\ORM\Association\HasMany $QualificationDetails
 *
 * @method \App\Model\Entity\Student newEmptyEntity()
 * @method \App\Model\Entity\Student newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);


        $this->setTable('students');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CommunicationDetail', [
            'className' => 'CommunicationDetails',
            'foreignKey' => 'id',
            'bindingKey' => 'student_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('ProgrammeDetail', [
            'className' => 'ProgrammeDetails',
            'foreignKey' => 'id',
            'bindingKey' => 'student_id',
            'joinType' => 'INNER',
        ]);

        $this->hasOne('CommunicationDetails', [
            'foreignKey' => 'id',
            'bindingKey' => 'student_id',
            'joinType' => 'INNER',
        ]);

        $this->hasOne('ProgrammeDetails', [
            'foreignKey' => 'id',
            'bindingKey' => 'student_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Universities', [
            'foreignKey' => 'university_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Genders', [
            'foreignKey' => 'gender_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('IdProofTypes', [
            'foreignKey' => 'id_proof_type_id',
            'joinType' => 'INNER',
        ]);

        $this->hasMany('QualificationDetails', [
            'foreignKey' => 'student_id',
        ]);


        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'restoreValueOnFailure' => true
            ],
            'document_front' => [
                'restoreValueOnFailure' => true
            ],
            'document_back' => [
                'restoreValueOnFailure' => true
            ]
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->integer('university_id')
            ->notEmptyString('university_id');

        $validator
            ->scalar('candidate_name')
            ->maxLength('candidate_name', 255)
            ->requirePresence('candidate_name', 'create')
            ->notEmptyString('candidate_name');

        $validator
            ->scalar('father_name')
            ->maxLength('father_name', 255)
            ->requirePresence('father_name', 'create')
            ->notEmptyString('father_name');

        $validator
            ->scalar('mother_name')
            ->maxLength('mother_name', 255)
            ->requirePresence('mother_name', 'create')
            ->notEmptyString('mother_name');

        $validator
            ->date('date_of_birth')
            ->requirePresence('date_of_birth', 'create')
            ->notEmptyDate('date_of_birth');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo')
            ->setProvider('photo', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->integer('gender_id')
            ->notEmptyString('gender_id');

        $validator
            ->integer('category_id')
            ->notEmptyString('category_id');

        $validator
            ->integer('id_proof_type_id')
            ->notEmptyString('id_proof_type_id');

        $validator
            ->boolean('are_you_employed')
            ->notEmptyString('are_you_employed');

        $validator
            ->scalar('id_proof_no')
            ->maxLength('id_proof_no', 255)
            ->requirePresence('id_proof_no', 'create')
            ->notEmptyString('id_proof_no');

        $validator
            ->requirePresence('document_front', 'create')
            ->notEmptyString('document_front')
            ->setProvider('photo', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->requirePresence('document_back', 'create')
            ->notEmptyString('document_back')
            ->setProvider('photo', \Josegonzalez\Upload\Validation\ImageValidation::class);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('university_id', 'Universities'), ['errorField' => 'university_id']);
        $rules->add($rules->existsIn('gender_id', 'Genders'), ['errorField' => 'gender_id']);
        $rules->add($rules->existsIn('category_id', 'Categories'), ['errorField' => 'category_id']);
        $rules->add($rules->existsIn('id_proof_type_id', 'IdProofTypes'), ['errorField' => 'id_proof_type_id']);

        return $rules;
    }
}
