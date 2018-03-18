<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursDiplome $coursDiplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cours Diplome'), ['action' => 'edit', $coursDiplome->diplome_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cours Diplome'), ['action' => 'delete', $coursDiplome->diplome_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursDiplome->diplome_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cours Diplomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cours Diplome'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursDiplomes view large-9 medium-8 columns content">
    <h3><?= h($coursDiplome->diplome_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Diplome') ?></th>
            <td><?= $coursDiplome->has('diplome') ? $this->Html->link($coursDiplome->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $coursDiplome->diplome->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cour') ?></th>
            <td><?= $coursDiplome->has('cour') ? $this->Html->link($coursDiplome->cour->id, ['controller' => 'Cours', 'action' => 'view', $coursDiplome->cour->id]) : '' ?></td>
        </tr>
    </table>
</div>
