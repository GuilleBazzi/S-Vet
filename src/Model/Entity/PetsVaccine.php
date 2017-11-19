<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PetsVaccine Entity
 *
 * @property int $id
 * @property int $id_pet
 * @property int $id_vaccine
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenDate $expiration_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PetsVaccine extends Entity
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
        'id_pet' => true,
        'id_vaccine' => true,
        'date' => true,
        'expiration_date' => true,
        'created' => true,
        'modified' => true
    ];
}
