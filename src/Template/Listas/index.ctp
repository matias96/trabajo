<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Lista[]|\Cake\Collection\CollectionInterface $listas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lista'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listas index large-9 medium-8 columns content">
    <h3><?= __('Listas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('n_orden') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('año_cursado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('año_que_cursa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horas_semana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profesor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_materia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nota') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listas as $lista): ?>
            <tr>
                <td><?= $this->Number->format($lista->n_orden) ?></td>
                <td><?= h($lista->id) ?></td>
                <td><?= $this->Number->format($lista->año_cursado) ?></td>
                <td><?= $this->Number->format($lista->año_que_cursa) ?></td>
                <td><?= $this->Number->format($lista->horas_semana) ?></td>
                <td><?= h($lista->profesor) ?></td>
                <td><?= $this->Number->format($lista->notas) ?></td>
                <td><?= h($lista->nombre_materia) ?></td>
                <td><?= h($lista->created) ?></td>
                <td><?= h($lista->modified) ?></td>
                <td><?= $this->Number->format($lista->fecha_nota) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lista->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lista->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lista->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
