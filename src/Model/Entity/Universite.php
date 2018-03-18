<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Universite Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $adresse_postale
 * @property string $adresse_web
 * @property string $adresse_mail
 *
 * @property \App\Model\Entity\Diplome[] $diplomes
 * @property \App\Model\Entity\Programme[] $programmes
 */
class Universite extends Entity
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
        'nom' => true,
        'adresse_postale' => true,
        'adresse_web' => true,
        'adresse_mail' => true,
        'diplomes' => true,
        'programmes' => true
    ];
}
