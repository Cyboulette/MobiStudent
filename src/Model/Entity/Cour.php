<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cour Entity
 *
 * @property int $id
 * @property string $libelle
 * @property int $nb_ects
 *
 * @property \App\Model\Entity\Contrat[] $contrats
 * @property \App\Model\Entity\Cour[] $cours
 * @property \App\Model\Entity\Diplome[] $diplomes
 */
class Cour extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'libelle' => true,
        'nb_ects' => true,
        'contrats' => true,
        'cours' => true,
        'diplomes' => true
    ];
}
