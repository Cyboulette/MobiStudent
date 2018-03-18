<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DemandeMobilite Entity
 *
 * @property int $id
 * @property int $etudiant_id
 * @property int $diplome_id
 * @property \Cake\I18n\FrozenTime $date_depot
 * @property string $etat
 *
 * @property \App\Model\Entity\Etudiant $etudiant
 * @property \App\Model\Entity\Diplome $diplome
 * @property \App\Model\Entity\Contrat[] $contrats
 */
class DemandeMobilite extends Entity
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
        'etudiant_id' => true,
        'diplome_id' => true,
        'date_depot' => true,
        'etat' => true,
        'etudiant' => true,
        'diplome' => true,
        'contrats' => true
    ];
}
