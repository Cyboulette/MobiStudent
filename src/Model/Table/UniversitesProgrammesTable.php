<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UniversitesProgrammes Model
 *
 * @property \App\Model\Table\UniversitesTable|\Cake\ORM\Association\BelongsTo $Universites
 * @property \App\Model\Table\ProgrammesTable|\Cake\ORM\Association\BelongsTo $Programmes
 *
 * @method \App\Model\Entity\UniversitesProgramme get($primaryKey, $options = [])
 * @method \App\Model\Entity\UniversitesProgramme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UniversitesProgramme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UniversitesProgramme|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UniversitesProgramme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UniversitesProgramme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UniversitesProgramme findOrCreate($search, callable $callback = null, $options = [])
 */
class UniversitesProgrammesTable extends Table
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

        $this->setTable('universites_programmes');
        $this->setDisplayField('universite_id');
        $this->setPrimaryKey(['universite_id', 'programme_id']);

        $this->belongsTo('Universites', [
            'foreignKey' => 'universite_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Programmes', [
            'foreignKey' => 'programme_id',
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
        $rules->add($rules->existsIn(['universite_id'], 'Universites'));
        $rules->add($rules->existsIn(['programme_id'], 'Programmes'));

        return $rules;
    }
}
