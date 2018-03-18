<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contrats Model
 *
 * @property \App\Model\Table\DiplomesTable|\Cake\ORM\Association\BelongsTo $Diplomes
 * @property \App\Model\Table\DemandeMobilitesTable|\Cake\ORM\Association\BelongsTo $DemandeMobilites
 * @property \App\Model\Table\ProgrammesTable|\Cake\ORM\Association\BelongsTo $Programmes
 * @property \App\Model\Table\DemandeFinancieresTable|\Cake\ORM\Association\HasMany $DemandeFinancieres
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsToMany $Cours
 *
 * @method \App\Model\Entity\Contrat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contrat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contrat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contrat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contrat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contrat findOrCreate($search, callable $callback = null, $options = [])
 */
class ContratsTable extends Table
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

        $this->setTable('contrats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Diplomes', [
            'foreignKey' => 'diplome_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DemandeMobilites', [
            'foreignKey' => 'demande_mobilite_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Programmes', [
            'foreignKey' => 'programme_id'
        ]);
        $this->hasMany('DemandeFinancieres', [
            'foreignKey' => 'contrat_id'
        ]);
        $this->belongsToMany('Cours', [
            'foreignKey' => 'contrat_id',
            'targetForeignKey' => 'cour_id',
            'joinTable' => 'cours_contrats'
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
            ->integer('duree')
            ->allowEmpty('duree');

        $validator
            ->scalar('etat')
            ->maxLength('etat', 32)
            ->allowEmpty('etat');

        $validator
            ->scalar('ordre')
            ->maxLength('ordre', 32)
            ->allowEmpty('ordre');

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
        $rules->add($rules->existsIn(['diplome_id'], 'Diplomes'));
        $rules->add($rules->existsIn(['demande_mobilite_id'], 'DemandeMobilites'));
        $rules->add($rules->existsIn(['programme_id'], 'Programmes'));

        return $rules;
    }
}
