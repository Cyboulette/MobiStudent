<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etudiant Entity
 *
 * @property int $id
 * @property int $diplome_id
 * @property int $num_etudiant
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $cv
 *
 * @property \App\Model\Entity\Diplome $diplome
 * @property \App\Model\Entity\DemandeMobilite[] $demande_mobilites
 */
class Etudiant extends Entity
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
        'num_etudiant' => true,
        'nom' => true,
        'prenom' => true,
        'email' => true,
        'cv' => true,
        'diplome' => true,
        'demande_mobilites' => true
    ];
}
