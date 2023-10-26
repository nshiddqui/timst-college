<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProgrammeDetails Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\CourceTypesTable&\Cake\ORM\Association\BelongsTo $CourceTypes
 * @property \App\Model\Table\FacultiesTable&\Cake\ORM\Association\BelongsTo $Faculties
 * @property \App\Model\Table\CourcesTable&\Cake\ORM\Association\BelongsTo $Cources
 * @property \App\Model\Table\StreamsTable&\Cake\ORM\Association\BelongsTo $Streams
 * @property \App\Model\Table\ModeOfStudiesTable&\Cake\ORM\Association\BelongsTo $ModeOfStudies
 *
 * @method \App\Model\Entity\ProgrammeDetail newEmptyEntity()
 * @method \App\Model\Entity\ProgrammeDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProgrammeDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProgrammeDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProgrammeDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProgrammeDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProgrammeDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProgrammeDetailsTable extends Table
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

        $this->setTable('programme_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cources', [
            'foreignKey' => 'cource_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CourceTypes', [
            'foreignKey' => 'cource_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Faculties', [
            'foreignKey' => 'faculty_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Streams', [
            'foreignKey' => 'stream_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ModeOfStudies', [
            'foreignKey' => 'mode_of_study_id',
            'joinType' => 'INNER',
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
            ->notEmptyString('student_id');

        $validator
            ->integer('cource_type_id')
            ->notEmptyString('cource_type_id');

        $validator
            ->integer('faculty_id')
            ->notEmptyString('faculty_id');

        $validator
            ->integer('cource_id')
            ->notEmptyString('cource_id');

        $validator
            ->integer('stream_id')
            ->notEmptyString('stream_id');

        $validator
            ->integer('year')
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('month_session')
            ->maxLength('month_session', 255)
            ->requirePresence('month_session', 'create')
            ->notEmptyString('month_session');

        $validator
            ->integer('session')
            ->requirePresence('session', 'create')
            ->notEmptyString('session');

        $validator
            ->integer('mode_of_study_id')
            ->notEmptyString('mode_of_study_id');

        $validator
            ->boolean('hostel_facility')
            ->requirePresence('hostel_facility', 'create')
            ->notEmptyString('hostel_facility');

        $validator
            ->integer('application_fee')
            ->requirePresence('application_fee', 'create')
            ->notEmptyString('application_fee');

        $validator
            ->integer('duration')
            ->allowEmptyString('duration');

        $validator
            ->integer('total_fees')
            ->allowEmptyString('total_fees');

        $validator
            ->integer('paying_fees')
            ->allowEmptyString('paying_fees');

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
        $rules->add($rules->existsIn('cource_type_id', 'CourceTypes'), ['errorField' => 'cource_type_id']);
        $rules->add($rules->existsIn('faculty_id', 'Faculties'), ['errorField' => 'faculty_id']);
        $rules->add($rules->existsIn('cource_id', 'Cources'), ['errorField' => 'cource_id']);
        $rules->add($rules->existsIn('stream_id', 'Streams'), ['errorField' => 'stream_id']);
        $rules->add($rules->existsIn('mode_of_study_id', 'ModeOfStudies'), ['errorField' => 'mode_of_study_id']);

        return $rules;
    }
}
