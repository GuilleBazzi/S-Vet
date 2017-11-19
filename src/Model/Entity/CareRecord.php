<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CareRecord Entity
 *
 * @property int $id
 * @property int $id_pet
 * @property \Cake\I18n\FrozenDate $date
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class CareRecord extends Entity
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
        'date' => true,
        'description' => true,
        'created' => true,
        'modified' => true
    ];
}
