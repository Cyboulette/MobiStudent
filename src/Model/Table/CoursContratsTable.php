<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoursContrats Model
 *
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsTo $Cours
 * @property \App\Model\Table\ContratsTable|\Cake\ORM\Association\BelongsTo $Contrats
 *
 * @method \App\Model\Entity\CoursContrat get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoursContrat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoursContrat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoursContrat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoursContrat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoursContrat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoursContrat findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursContratsTable extends Table
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

        $this->setTable('cours_contrats');
        $this->setDisplayField('cour_id');
        $this->setPrimaryKey(['cour_id', 'contrat_id']);

        $this->belongsTo('Cours', [
            'foreignKey' => 'cour_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contrats', [
            'foreignKey' => 'contrat_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['cour_id'], 'Cours'));
        $rules->add($rules->existsIn(['contrat_id'], 'Contrats'));

        return $rules;
    }
}
