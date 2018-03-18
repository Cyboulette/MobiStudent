<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursDiplome[]|\Cake\Collection\CollectionInterface $coursDiplomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cours Diplome'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursDiplomes index large-9 medium-8 columns content">
    <h3><?= __('Cours Diplomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('diplome_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cour_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursDiplomes as $coursDiplome): ?>
            <tr>
                <td><?= $coursDiplome->has('diplome') ? $this->Html->link($coursDiplome->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $coursDiplome->diplome->id]) : '' ?></td>
                <td><?= $coursDiplome->has('cour') ? $this->Html->link($coursDiplome->cour->id, ['controller' => 'Cours', 'action' => 'view', $coursDiplome->cour->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursDiplome->diplome_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursDiplome->diplome_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursDiplome->diplome_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursDiplome->diplome_id)]) ?>
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
