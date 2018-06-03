<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property string $theme
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $discription
 * @property int $published
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Tag[] $tags
 */
class Article extends Entity
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
        'theme' => true,
        'user_id' => true,
        'category_id' => true,
        'title' => true,
        'discription' => true,
        'published' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'category' => true,
        'tags' => true
    ];
}
