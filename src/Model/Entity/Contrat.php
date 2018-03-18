<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrat Entity
 *
 * @property int $id
 * @property int $diplome_id
 * @property int $demande_mobilite_id
 * @property int $programme_id
 * @property int $duree
 * @property string $etat
 * @property string $ordre
 *
 * @property \App\Model\Entity\Diplome $diplome
 * @property \App\Model\Entity\DemandeMobilite $demande_mobilite
 * @property \App\Model\Entity\Programme $programme
 * @property \App\Model\Entity\DemandeFinanciere[] $demande_financieres
 * @property \App\Model\Entity\Cour[] $cours
 */
class Contrat extends Entity
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
        'diplome_id' => true,
        'demande_mobilite_id' => true,
        'programme_id' => true,
        'duree' => true,
        'etat' => true,
        'ordre' => true,
        'diplome' => true,
        'demande_mobilite' => true,
        'programme' => true,
        'demande_financieres' => true,
        'cours' => true
    ];
}
