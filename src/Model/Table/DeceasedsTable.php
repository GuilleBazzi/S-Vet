<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deceaseds Model
 *
 * @method \App\Model\Entity\Deceased get($primaryKey, $options = [])
 * @method \App\Model\Entity\Deceased newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Deceased[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Deceased|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deceased patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Deceased[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Deceased findOrCreate($search, callable $callback = null, $options = [])
 */
class DeceasedsTable extends Table
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

        $this->setTable('deceaseds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('cause')
            ->maxLength('cause', 255)
            ->requirePresence('cause', 'create')
            ->notEmpty('cause');

        return $validator;
    }
}
