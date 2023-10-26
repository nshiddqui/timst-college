<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QualificationDetails Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\QualificationDetail newEmptyEntity()
 * @method \App\Model\Entity\QualificationDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\QualificationDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QualificationDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\QualificationDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\QualificationDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QualificationDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\QualificationDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QualificationDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QualificationDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QualificationDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\QualificationDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QualificationDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QualificationDetailsTable extends Table
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

        $this->setTable('qualification_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'secondary_documents' => [
                'restoreValueOnFailure' => true
            ],
            'sr_secondary_documents' => [
                'restoreValueOnFailure' => true
            ],
            'graduation_documents' => [
                'restoreValueOnFailure' => true
            ],
            'post_graduation_documents' => [
                'restoreValueOnFailure' => true
            ],
            'other_documents' => [
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
            ->integer('student_id')
            ->allowEmptyString('student_id');

        $validator
            ->scalar('secondary_year_of_passing')
            ->maxLength('secondary_year_of_passing', 255)
            ->allowEmptyString('secondary_year_of_passing');

        $validator
            ->scalar('sr_secondary_year_of_passing')
            ->maxLength('sr_secondary_year_of_passing', 255)
            ->allowEmptyString('sr_secondary_year_of_passing');

        $validator
            ->scalar('graduation_year_of_passing')
            ->maxLength('graduation_year_of_passing', 255)
            ->allowEmptyString('graduation_year_of_passing');

        $validator
            ->scalar('post_graduation_year_of_passing')
            ->maxLength('post_graduation_year_of_passing', 255)
            ->allowEmptyString('post_graduation_year_of_passing');

        $validator
            ->scalar('other_year_of_passing')
            ->maxLength('other_year_of_passing', 255)
            ->allowEmptyString('other_year_of_passing');

        $validator
            ->scalar('secondary_university')
            ->maxLength('secondary_university', 255)
            ->allowEmptyString('secondary_university');

        $validator
            ->scalar('sr_secondary_university')
            ->maxLength('sr_secondary_university', 255)
            ->allowEmptyString('sr_secondary_university');

        $validator
            ->scalar('graduation_university')
            ->maxLength('graduation_university', 255)
            ->allowEmptyString('graduation_university');

        $validator
            ->scalar('post_graduation_university')
            ->maxLength('post_graduation_university', 255)
            ->allowEmptyString('post_graduation_university');

        $validator
            ->scalar('other_university')
            ->maxLength('other_university', 255)
            ->allowEmptyString('other_university');

        $validator
            ->scalar('secondary_percentage')
            ->maxLength('secondary_percentage', 255)
            ->allowEmptyString('secondary_percentage');

        $validator
            ->scalar('sr_secondary_percentage')
            ->maxLength('sr_secondary_percentage', 255)
            ->allowEmptyString('sr_secondary_percentage');

        $validator
            ->scalar('graduation_percentage')
            ->maxLength('graduation_percentage', 255)
            ->allowEmptyString('graduation_percentage');

        $validator
            ->scalar('post_graduation_percentage')
            ->maxLength('post_graduation_percentage', 255)
            ->allowEmptyString('post_graduation_percentage');

        $validator
            ->scalar('other_percentage')
            ->maxLength('other_percentage', 255)
            ->allowEmptyString('other_percentage');

        $validator
            ->allowEmptyString('secondary_documents')
            ->setProvider('secondary_documents', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->allowEmptyString('sr_secondary_documents')
            ->setProvider('sr_secondary_documents', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->allowEmptyString('graduation_documents')
            ->setProvider('graduation_documents', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->allowEmptyString('post_graduation_documents')
            ->setProvider('post_graduation_documents', \Josegonzalez\Upload\Validation\ImageValidation::class);

        $validator
            ->allowEmptyString('other_documents')
            ->setProvider('other_documents', \Josegonzalez\Upload\Validation\ImageValidation::class);

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
        $rules->add($rules->existsIn('student_id', 'Students'), ['errorField' => 'student_id']);

        return $rules;
    }
}
