<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursContrat $coursContrat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cours Contrat'), ['action' => 'edit', $coursContrat->cour_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cours Contrat'), ['action' => 'delete', $coursContrat->cour_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursContrat->cour_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cours Contrats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cours Contrat'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursContrats view large-9 medium-8 columns content">
    <h3><?= h($coursContrat->cour_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cour') ?></th>
            <td><?= $coursContrat->has('cour') ? $this->Html->link($coursContrat->cour->id, ['controller' => 'Cours', 'action' => 'view', $coursContrat->cour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrat') ?></th>
            <td><?= $coursContrat->has('contrat') ? $this->Html->link($coursContrat->contrat->id, ['controller' => 'Contrats', 'action' => 'view', $coursContrat->contrat->id]) : '' ?></td>
        </tr>
    </table>
</div>
