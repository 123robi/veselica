<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Narocilaitems Model
 *
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\NarocilosTable|\Cake\ORM\Association\BelongsTo $Narocilos
 *
 * @method \App\Model\Entity\Narocilaitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Narocilaitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Narocilaitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Narocilaitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Narocilaitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Narocilaitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Narocilaitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Narocilaitem findOrCreate($search, callable $callback = null, $options = [])
 */
class NarocilaitemsTable extends Table
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

        $this->setTable('narocilaitems');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Narocilos', [
            'foreignKey' => 'narocilo_id',
            'joinType' => 'INNER'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->integer('kolicina')
            ->requirePresence('kolicina', 'create')
            ->notEmptyString('kolicina');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        $rules->add($rules->existsIn(['narocilo_id'], 'Narocilos'));

        return $rules;
    }
}
