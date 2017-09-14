<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lista->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lista->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Listas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="listas form large-9 medium-8 columns content">
    <?= $this->Form->create($lista) ?>
    <fieldset>
        <legend><?= __('Edit Lista') ?></legend>
        <?php
            echo $this->Form->control('n_orden');
            echo $this->Form->control('año_cursado');
            echo $this->Form->control('año_que_cursa');
            echo $this->Form->control('horas_semana');
            echo $this->Form->control('profesor');
            echo $this->Form->control('notas');
            echo $this->Form->control('nombre_materia');
            echo $this->Form->control('fecha_nota');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
