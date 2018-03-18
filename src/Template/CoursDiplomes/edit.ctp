<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursDiplome $coursDiplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coursDiplome->diplome_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coursDiplome->diplome_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cours Diplomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursDiplomes form large-9 medium-8 columns content">
    <?= $this->Form->create($coursDiplome) ?>
    <fieldset>
        <legend><?= __('Edit Cours Diplome') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
