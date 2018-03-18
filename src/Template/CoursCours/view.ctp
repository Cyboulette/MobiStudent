<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursCour $coursCour
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cours Cour'), ['action' => 'edit', $coursCour->parent_cour_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cours Cour'), ['action' => 'delete', $coursCour->parent_cour_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursCour->parent_cour_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cours Cours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cours Cour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursCours view large-9 medium-8 columns content">
    <h3><?= h($coursCour->parent_cour_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cour') ?></th>
            <td><?= $coursCour->has('cour') ? $this->Html->link($coursCour->cour->id, ['controller' => 'Cours', 'action' => 'view', $coursCour->cour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Cour Id') ?></th>
            <td><?= $this->Number->format($coursCour->parent_cour_id) ?></td>
        </tr>
    </table>
</div>
