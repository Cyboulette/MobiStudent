<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DemandeMobilites Model
 *
 * @property \App\Model\Table\EtudiantsTable|\Cake\ORM\Association\BelongsTo $Etudiants
 * @property \App\Model\Table\DiplomesTable|\Cake\ORM\Association\BelongsTo $Diplomes
 * @property \App\Model\Table\ContratsTable|\Cake\ORM\Association\HasMany $Contrats
 *
 * @method \App\Model\Entity\DemandeMobilite get($primaryKey, $options = [])
 * @method \App\Model\Entity\DemandeMobilite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DemandeMobilite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DemandeMobilite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DemandeMobilite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DemandeMobilite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DemandeMobilite findOrCreate($search, callable $callback = null, $options = [])
 */
class DemandeMobilitesTable extends Table
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

        $this->setTable('demande_mobilites');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Etudiants', [
            'foreignKey' => 'etudiant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Diplomes', [
            'foreignKey' => 'diplome_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Contrats', [
            'foreignKey' => 'demande_mobilite_id'
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
            ->dateTime('date_depot')
            ->allowEmpty('date_depot');

        $validator
            ->scalar('etat')
            ->maxLength('etat', 32)
            ->allowEmpty('etat');

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
        $rules->add($rules->existsIn(['etudiant_id'], 'Etudiants'));
        $rules->add($rules->existsIn(['diplome_id'], 'Diplomes'));

        return $rules;
    }
}
