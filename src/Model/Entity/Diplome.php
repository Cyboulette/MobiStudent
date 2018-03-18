<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diplome Entity
 *
 * @property int $id
 * @property int $universite_id
 * @property string $intitule
 * @property string $adresse_web
 * @property int $niveau
 *
 * @property \App\Model\Entity\Universite $universite
 * @property \App\Model\Entity\Contrat[] $contrats
 * @property \App\Model\Entity\DemandeMobilite[] $demande_mobilites
 * @property \App\Model\Entity\Etudiant[] $etudiants
 * @property \App\Model\Entity\Cour[] $cours
 */
class Diplome extends Entity
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
        'universite_id' => true,
        'intitule' => true,
        'adresse_web' => true,
        'niveau' => true,
        'universite' => true,
        'contrats' => true,
        'demande_mobilites' => true,
        'etudiants' => true,
        'cours' => true
    ];
}
