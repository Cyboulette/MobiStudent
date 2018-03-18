<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Universite $universite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $universite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $universite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Universites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universites form large-9 medium-8 columns content">
    <?= $this->Form->create($universite) ?>
    <fieldset>
        <legend><?= __('Edit Universite') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('adresse_postale');
            echo $this->Form->control('adresse_web');
            echo $this->Form->control('adresse_mail');
            echo $this->Form->control('programmes._ids', ['options' => $programmes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
