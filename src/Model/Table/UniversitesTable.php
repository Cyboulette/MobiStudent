<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Universites Model
 *
 * @property \App\Model\Table\DiplomesTable|\Cake\ORM\Association\HasMany $Diplomes
 * @property \App\Model\Table\ProgrammesTable|\Cake\ORM\Association\BelongsToMany $Programmes
 *
 * @method \App\Model\Entity\Universite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Universite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Universite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Universite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Universite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Universite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Universite findOrCreate($search, callable $callback = null, $options = [])
 */
class UniversitesTable extends Table
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

        $this->setTable('universites');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Diplomes', [
            'foreignKey' => 'universite_id'
        ]);
        $this->belongsToMany('Programmes', [
            'foreignKey' => 'universite_id',
            'targetForeignKey' => 'programme_id',
            'joinTable' => 'universites_programmes'
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
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->requirePresence('nom', 'create')
            ->notEmpty('nom')
            ->add('nom', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('adresse_postale')
            ->maxLength('adresse_postale', 255)
            ->allowEmpty('adresse_postale');

        $validator
            ->scalar('adresse_web')
            ->maxLength('adresse_web', 255)
            ->allowEmpty('adresse_web');

        $validator
            ->scalar('adresse_mail')
            ->maxLength('adresse_mail', 255)
            ->allowEmpty('adresse_mail');

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
        $rules->add($rules->isUnique(['nom']));

        return $rules;
    }
}
