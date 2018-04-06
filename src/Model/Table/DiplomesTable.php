<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diplomes Model
 *
 * @property \App\Model\Table\UniversitesTable|\Cake\ORM\Association\BelongsTo $Universites
 * @property \App\Model\Table\ContratsTable|\Cake\ORM\Association\HasMany $Contrats
 * @property \App\Model\Table\DemandeMobilitesTable|\Cake\ORM\Association\HasMany $DemandeMobilites
 * @property \App\Model\Table\EtudiantsTable|\Cake\ORM\Association\HasMany $Etudiants
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsToMany $Cours
 *
 * @method \App\Model\Entity\Diplome get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diplome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diplome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diplome|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diplome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diplome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diplome findOrCreate($search, callable $callback = null, $options = [])
 */
class DiplomesTable extends Table
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

        $this->setTable('diplomes');
        $this->setDisplayField('intitule');
        $this->setPrimaryKey('id');

        $this->belongsTo('Universites', [
            'foreignKey' => 'universite_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Contrats', [
            'foreignKey' => 'diplome_id'
        ]);
        $this->hasMany('DemandeMobilites', [
            'foreignKey' => 'diplome_id'
        ]);
        $this->hasMany('Etudiants', [
            'foreignKey' => 'diplome_id'
        ]);
        $this->belongsToMany('Cours', [
            'foreignKey' => 'diplome_id',
            'targetForeignKey' => 'cour_id',
            'joinTable' => 'cours_diplomes'
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
            ->scalar('intitule')
            ->maxLength('intitule', 128)
            ->allowEmpty('intitule');

        $validator
            ->scalar('adresse_web')
            ->maxLength('adresse_web', 128)
            ->allowEmpty('adresse_web');

        $validator
            ->integer('niveau')
            ->allowEmpty('niveau');

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
        $rules->add($rules->existsIn(['universite_id'], 'Universites'));

        return $rules;
    }
}
