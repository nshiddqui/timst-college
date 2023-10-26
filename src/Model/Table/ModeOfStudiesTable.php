<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModeOfStudies Model
 *
 * @property \App\Model\Table\ProgrammeDetailsTable&\Cake\ORM\Association\HasMany $ProgrammeDetails
 *
 * @method \App\Model\Entity\ModeOfStudy newEmptyEntity()
 * @method \App\Model\Entity\ModeOfStudy newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ModeOfStudy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ModeOfStudy get($primaryKey, $options = [])
 * @method \App\Model\Entity\ModeOfStudy findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ModeOfStudy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ModeOfStudy[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ModeOfStudy|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModeOfStudy saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModeOfStudy[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModeOfStudy[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModeOfStudy[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ModeOfStudy[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModeOfStudiesTable extends Table
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

        $this->setTable('mode_of_studies');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ProgrammeDetails', [
            'foreignKey' => 'mode_of_study_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
