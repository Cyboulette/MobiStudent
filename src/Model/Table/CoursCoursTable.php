<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoursCours Model
 *
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsTo $Cours
 * @property \App\Model\Table\CoursTable|\Cake\ORM\Association\BelongsTo $Cours
 *
 * @method \App\Model\Entity\CoursCour get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoursCour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoursCour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoursCour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoursCour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoursCour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoursCour findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursCoursTable extends Table
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

        $this->setTable('cours_cours');
        $this->setDisplayField('parent_cour_id');
        $this->setPrimaryKey(['parent_cour_id', 'child_cour_id']);

        $this->belongsTo('Cours', [
            'foreignKey' => 'parent_cour_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cours', [
            'foreignKey' => 'child_cour_id',
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
        $rules->add($rules->existsIn(['parent_cour_id'], 'Cours'));
        $rules->add($rules->existsIn(['child_cour_id'], 'Cours'));

        return $rules;
    }
}
