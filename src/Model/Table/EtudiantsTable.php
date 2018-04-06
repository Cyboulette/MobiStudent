<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etudiants Model
 *
 * @property \App\Model\Table\DiplomesTable|\Cake\ORM\Association\BelongsTo $Diplomes
 * @property \App\Model\Table\DemandeMobilitesTable|\Cake\ORM\Association\HasMany $DemandeMobilites
 *
 * @method \App\Model\Entity\Etudiant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Etudiant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Etudiant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etudiant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant findOrCreate($search, callable $callback = null, $options = [])
 */
class EtudiantsTable extends Table
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

        $this->setTable('etudiants');
        $this->setDisplayField('num_etudiant');
        $this->setPrimaryKey('id');

        $this->belongsTo('Diplomes', [
            'foreignKey' => 'diplome_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DemandeMobilites', [
            'foreignKey' => 'etudiant_id'
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
            ->requirePresence('num_etudiant', 'create')
            ->notEmpty('num_etudiant')
            ->add('num_etudiant', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nom')
            ->maxLength('nom', 128)
            ->allowEmpty('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 128)
            ->allowEmpty('prenom');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('cv')
            ->maxLength('cv', 128)
            ->allowEmpty('cv');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['num_etudiant']));
        $rules->add($rules->existsIn(['diplome_id'], 'Diplomes'));

        return $rules;
    }
}
