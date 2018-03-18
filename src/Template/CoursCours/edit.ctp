<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursCour $coursCour
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coursCour->parent_cour_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coursCour->parent_cour_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cours Cours'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursCours form large-9 medium-8 columns content">
    <?= $this->Form->create($coursCour) ?>
    <fieldset>
        <legend><?= __('Edit Cours Cour') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
