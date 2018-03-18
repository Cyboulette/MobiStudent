<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programme $programme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $programme->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $programme->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Programmes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programmes form large-9 medium-8 columns content">
    <?= $this->Form->create($programme) ?>
    <fieldset>
        <legend><?= __('Edit Programme') ?></legend>
        <?php
            echo $this->Form->control('intitule');
            echo $this->Form->control('explication');
            echo $this->Form->control('universites._ids', ['options' => $universites]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
