<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Universite[]|\Cake\Collection\CollectionInterface $universites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Universite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universites index large-9 medium-8 columns content">
    <h3><?= __('Universites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse_postale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse_mail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($universites as $universite): ?>
            <tr>
                <td><?= $this->Number->format($universite->id) ?></td>
                <td><?= h($universite->nom) ?></td>
                <td><?= h($universite->adresse_postale) ?></td>
                <td><?= h($universite->adresse_web) ?></td>
                <td><?= h($universite->adresse_mail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $universite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $universite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $universite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universite->id)]) ?>
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
