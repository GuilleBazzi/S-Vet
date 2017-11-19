<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vaccines Model
 *
 * @property \App\Model\Table\PetsTable|\Cake\ORM\Association\BelongsToMany $Pets
 *
 * @method \App\Model\Entity\Vaccine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vaccine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vaccine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vaccine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaccine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vaccine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vaccine findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VaccinesTable extends Table
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

        $this->setTable('vaccines');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Pets', [
            'foreignKey' => 'vaccine_id',
            'targetForeignKey' => 'pet_id',
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('dose')
            ->requirePresence('dose', 'create')
            ->notEmpty('dose');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
