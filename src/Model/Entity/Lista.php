<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lista Entity
 *
 * @property int $n_orden
 * @property string $id
 * @property int $año_cursado
 * @property int $año_que_cursa
 * @property int $horas_semana
 * @property string $profesor
 * @property int $notas
 * @property string $nombre_materia
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $fecha_nota
 */
class Lista extends Entity
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
        '*' => true,
        'id' => false
    ];
}
