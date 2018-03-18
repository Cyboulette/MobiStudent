<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cour $cour
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cour->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cour->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cours form large-9 medium-8 columns content">
    <?= $this->Form->create($cour) ?>
    <fieldset>
        <legend><?= __('Edit Cour') ?></legend>
        <?php
            echo $this->Form->control('libelle');
            echo $this->Form->control('nb_ects');
            echo $this->Form->control('contrats._ids', ['options' => $contrats]);
            echo $this->Form->control('cours._ids', ['options' => $cours]);
            echo $this->Form->control('diplomes._ids', ['options' => $diplomes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
