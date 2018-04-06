<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cours Model
 *
 * @property \App\Model\Table\ContratsTable|\Cake\ORM\Association\BelongsToMany $Contrats
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsToMany $Cours
 * @property \App\Model\Table\DiplomesTable|\Cake\ORM\Association\BelongsToMany $Diplomes
 *
 * @method \App\Model\Entity\Cour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cour findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursTable extends Table
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

        $this->setTable('cours');
        $this->setDisplayField('libelle');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Contrats', [
            'foreignKey' => 'cour_id',
            'targetForeignKey' => 'contrat_id',
            'joinTable' => 'cours_contrats'
        ]);
        $this->belongsToMany('Cours', [
            'foreignKey' => 'cour_id',
            'targetForeignKey' => 'cour_id',
            'joinTable' => 'cours_cours'
        ]);
        $this->belongsToMany('Diplomes', [
            'foreignKey' => 'cour_id',
            'targetForeignKey' => 'diplome_id',
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
            ->scalar('libelle')
            ->maxLength('libelle', 128)
            ->allowEmpty('libelle');

        $validator
            ->integer('nb_ects')
            ->allowEmpty('nb_ects');

        return $validator;
    }
}
