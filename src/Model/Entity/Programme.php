<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programme Entity
 *
 * @property int $id
 * @property string $intitule
 * @property string $explication
 *
 * @property \App\Model\Entity\Contrat[] $contrats
 * @property \App\Model\Entity\Universite[] $universites
 */
class Programme extends Entity
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
        'intitule' => true,
        'explication' => true,
        'contrats' => true,
        'universites' => true
    ];
}
