<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Narocilaitem Entity
 *
 * @property int $id
 * @property int $item_id
 * @property int $narocilo_id
 * @property int $kolicina
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Narocilo $narocilo
 */
class Narocilaitem extends Entity
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
        'item_id' => true,
        'narocilo_id' => true,
        'kolicina' => true,
        'item' => true,
        'narocilo' => true
    ];
}
