<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pets Model
 *
 * @property \App\Model\Table\VaccinesTable|\Cake\ORM\Association\BelongsToMany $Vaccines
 *
 * @method \App\Model\Entity\Pet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pet findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PetsTable extends Table
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

        $this->setTable('pets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

//      Acá está parte de la magia!  
        $this->belongsTo('Species', [
            'foreignKey' => 'id_species'
        ]);
        
        $this->belongsTo('Clients', [
            'foreignKey' => 'id_client'
        ]);
        
        
        $this->belongsToMany('Vaccines', [
            'foreignKey' => 'id_pet',
            'targetForeignKey' => 'id_vaccine',
            'joinTable' => 'pets_vaccines'
        ]);
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
            ->integer('id_client')
            ->requirePresence('id_client', 'create')
            ->notEmpty('id_client');

        $validator
            ->integer('id_species')
            ->requirePresence('id_species', 'create')
            ->notEmpty('id_species');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmpty('name');

        $validator
            ->date('birthdate')
            ->requirePresence('birthdate', 'create')
            ->notEmpty('birthdate');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->scalar('comment')
            ->maxLength('comment', 255)
            ->requirePresence('comment', 'create')
            ->notEmpty('comment');

        $validator
            ->boolean('aggressive')
            ->requirePresence('aggressive', 'create')
            ->notEmpty('aggressive');

        return $validator;
    }
}
