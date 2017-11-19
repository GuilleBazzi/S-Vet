<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property int $dni
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $telephone
 * @property string $address
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Client extends Entity
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
        'dni' => true,
        'name' => true,
        'surname' => true,
        'email' => true,
        'telephone' => true,
        'address' => true,
        'birthdate' => true,
        'created' => true,
        'modified' => true
    ];
}
