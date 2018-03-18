<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UniversitesProgramme[]|\Cake\Collection\CollectionInterface $universitesProgrammes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Universites Programme'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universitesProgrammes index large-9 medium-8 columns content">
    <h3><?= __('Universites Programmes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('universite_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programme_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($universitesProgrammes as $universitesProgramme): ?>
            <tr>
                <td><?= $universitesProgramme->has('universite') ? $this->Html->link($universitesProgramme->universite->id, ['controller' => 'Universites', 'action' => 'view', $universitesProgramme->universite->id]) : '' ?></td>
                <td><?= $universitesProgramme->has('programme') ? $this->Html->link($universitesProgramme->programme->id, ['controller' => 'Programmes', 'action' => 'view', $universitesProgramme->programme->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $universitesProgramme->universite_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $universitesProgramme->universite_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $universitesProgramme->universite_id], ['confirm' => __('Are you sure you want to delete # {0}?', $universitesProgramme->universite_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
