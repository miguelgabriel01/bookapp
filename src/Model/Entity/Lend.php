<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lend Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $book_id
 * @property string|null $Note
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Book $book
 */
class Lend extends Entity
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
        'user_id' => true,
        'book_id' => true,
        'Note' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'book' => true,
    ];
}
