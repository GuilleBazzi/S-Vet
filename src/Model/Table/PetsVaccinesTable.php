<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PetsVaccines Model
 *
 * @method \App\Model\Entity\PetsVaccine get($primaryKey, $options = [])
 * @method \App\Model\Entity\PetsVaccine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PetsVaccine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PetsVaccine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PetsVaccine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PetsVaccine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PetsVaccine findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PetsVaccinesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pets_vaccines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_pet')
            ->requirePresence('id_pet', 'create')
            ->notEmpty('id_pet');

        $validator
            ->integer('id_vaccine')
            ->requirePresence('id_vaccine', 'create')
            ->notEmpty('id_vaccine');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->date('expiration_date')
            ->requirePresence('expiration_date', 'create')
            ->notEmpty('expiration_date');

        return $validator;
    }
}
