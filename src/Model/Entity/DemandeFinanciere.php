<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DemandeFinanciere Entity
 *
 * @property int $id
 * @property int $contrat_id
 * @property \Cake\I18n\FrozenTime $date_depot
 * @property string $etat
 * @property float $montant_accorde
 *
 * @property \App\Model\Entity\Contrat $contrat
 */
class DemandeFinanciere extends Entity
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
        'contrat_id' => true,
        'date_depot' => true,
        'etat' => true,
        'montant_accorde' => true,
        'contrat' => true
    ];
}
