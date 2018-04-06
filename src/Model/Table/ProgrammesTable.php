<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programmes Model
 *
 * @property \App\Model\Table\ContratsTable|\Cake\ORM\Association\HasMany $Contrats
 * @property \App\Model\Table\UniversitesTable|\Cake\ORM\Association\BelongsToMany $Universites
 *
 * @method \App\Model\Entity\Programme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Programme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Programme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Programme|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Programme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Programme findOrCreate($search, callable $callback = null, $options = [])
 */
class ProgrammesTable extends Table
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

        $this->setTable('programmes');
        $this->setDisplayField('intitule');
        $this->setPrimaryKey('id');

        $this->hasMany('Contrats', [
            'foreignKey' => 'programme_id'
        ]);
        $this->belongsToMany('Universites', [
            'foreignKey' => 'programme_id',
            'targetForeignKey' => 'universite_id',
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
            ->scalar('intitule')
            ->maxLength('intitule', 128)
            ->allowEmpty('intitule');

        $validator
            ->scalar('explication')
            ->allowEmpty('explication');

        return $validator;
    }
}
