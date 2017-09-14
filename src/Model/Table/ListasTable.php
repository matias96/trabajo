<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listas Model
 *
 * @method \App\Model\Entity\Lista get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lista newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lista[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lista|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lista[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lista findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('listas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('n_orden')
            ->requirePresence('n_orden', 'create')
            ->notEmpty('n_orden');

        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('año_cursado')
            ->requirePresence('año_cursado', 'create')
            ->notEmpty('año_cursado');

        $validator
            ->integer('año_que_cursa')
            ->requirePresence('año_que_cursa', 'create')
            ->notEmpty('año_que_cursa');

        $validator
            ->integer('horas_semana')
            ->requirePresence('horas_semana', 'create')
            ->notEmpty('horas_semana');

        $validator
            ->requirePresence('profesor', 'create')
            ->notEmpty('profesor');

        $validator
            ->integer('notas')
            ->requirePresence('notas', 'create')
            ->notEmpty('notas');

        $validator
            ->requirePresence('nombre_materia', 'create')
            ->notEmpty('nombre_materia');

        $validator
            ->integer('fecha_nota')
            ->requirePresence('fecha_nota', 'create')
            ->notEmpty('fecha_nota');

        return $validator;
    }
}
