<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CommunicationDetails Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 *
 * @method \App\Model\Entity\CommunicationDetail newEmptyEntity()
 * @method \App\Model\Entity\CommunicationDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CommunicationDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CommunicationDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CommunicationDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CommunicationDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CommunicationDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CommunicationDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CommunicationDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CommunicationDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CommunicationDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CommunicationDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CommunicationDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CommunicationDetailsTable extends Table
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

        $this->setTable('communication_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
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
            ->scalar('contact_number')
            ->maxLength('contact_number', 255)
            ->requirePresence('contact_number', 'create')
            ->notEmptyString('contact_number');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 255)
            ->requirePresence('email_address', 'create')
            ->notEmptyString('email_address');

        $validator
            ->scalar('father_contact_no')
            ->maxLength('father_contact_no', 255)
            ->requirePresence('father_contact_no', 'create')
            ->notEmptyString('father_contact_no');

        $validator
            ->scalar('mother_contact_no')
            ->maxLength('mother_contact_no', 255)
            ->requirePresence('mother_contact_no', 'create')
            ->notEmptyString('mother_contact_no');

        $validator
            ->integer('country_id')
            ->notEmptyString('country_id');

        $validator
            ->scalar('nationality')
            ->maxLength('nationality', 255)
            ->requirePresence('nationality', 'create')
            ->notEmptyString('nationality');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('pincode')
            ->requirePresence('pincode', 'create')
            ->notEmptyString('pincode');

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
        $rules->add($rules->existsIn('country_id', 'Countries'), ['errorField' => 'country_id']);

        return $rules;
    }
}
