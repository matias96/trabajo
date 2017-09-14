<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Lista $lista
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lista'), ['action' => 'edit', $lista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lista'), ['action' => 'delete', $lista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lista'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listas view large-9 medium-8 columns content">
    <h3><?= h($lista->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($lista->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profesor') ?></th>
            <td><?= h($lista->profesor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Materia') ?></th>
            <td><?= h($lista->nombre_materia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N Orden') ?></th>
            <td><?= $this->Number->format($lista->n_orden) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año Cursado') ?></th>
            <td><?= $this->Number->format($lista->año_cursado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año Que Cursa') ?></th>
            <td><?= $this->Number->format($lista->año_que_cursa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horas Semana') ?></th>
            <td><?= $this->Number->format($lista->horas_semana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notas') ?></th>
            <td><?= $this->Number->format($lista->notas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nota') ?></th>
            <td><?= $this->Number->format($lista->fecha_nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lista->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lista->modified) ?></td>
        </tr>
    </table>
</div>
