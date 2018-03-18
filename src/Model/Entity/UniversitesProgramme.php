<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UniversitesProgramme Entity
 *
 * @property int $universite_id
 * @property int $programme_id
 *
 * @property \App\Model\Entity\Universite $universite
 * @property \App\Model\Entity\Programme $programme
 */
class UniversitesProgramme extends Entity
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
        'universite' => true,
        'programme' => true
    ];
}
