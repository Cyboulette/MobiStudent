<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoursDiplomes Model
 *
 * @property \App\Model\Table\DiplomesTable|\Cake\ORM\Association\BelongsTo $Diplomes
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsTo $Cours
 *
 * @method \App\Model\Entity\CoursDiplome get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoursDiplome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoursDiplome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoursDiplome|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoursDiplome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoursDiplome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoursDiplome findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursDiplomesTable extends Table
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

        $this->setTable('cours_diplomes');
        $this->setDisplayField('diplome_id');
        $this->setPrimaryKey(['diplome_id', 'cour_id']);

        $this->belongsTo('Diplomes', [
            'foreignKey' => 'diplome_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cours', [
            'foreignKey' => 'cour_id',
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
        $rules->add($rules->existsIn(['diplome_id'], 'Diplomes'));
        $rules->add($rules->existsIn(['cour_id'], 'Cours'));

        return $rules;
    }
}
