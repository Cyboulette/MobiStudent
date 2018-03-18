<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UniversitesProgramme $universitesProgramme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Universites Programme'), ['action' => 'edit', $universitesProgramme->universite_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Universites Programme'), ['action' => 'delete', $universitesProgramme->universite_id], ['confirm' => __('Are you sure you want to delete # {0}?', $universitesProgramme->universite_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Universites Programmes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universites Programme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="universitesProgrammes view large-9 medium-8 columns content">
    <h3><?= h($universitesProgramme->universite_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Universite') ?></th>
            <td><?= $universitesProgramme->has('universite') ? $this->Html->link($universitesProgramme->universite->id, ['controller' => 'Universites', 'action' => 'view', $universitesProgramme->universite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programme') ?></th>
            <td><?= $universitesProgramme->has('programme') ? $this->Html->link($universitesProgramme->programme->id, ['controller' => 'Programmes', 'action' => 'view', $universitesProgramme->programme->id]) : '' ?></td>
        </tr>
    </table>
</div>
