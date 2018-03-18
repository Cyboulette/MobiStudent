<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UniversitesProgramme $universitesProgramme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Universites Programmes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universitesProgrammes form large-9 medium-8 columns content">
    <?= $this->Form->create($universitesProgramme) ?>
    <fieldset>
        <legend><?= __('Add Universites Programme') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
