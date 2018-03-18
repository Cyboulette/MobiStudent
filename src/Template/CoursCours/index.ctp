<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursCour[]|\Cake\Collection\CollectionInterface $coursCours
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cours Cour'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursCours index large-9 medium-8 columns content">
    <h3><?= __('Cours Cours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('parent_cour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('child_cour_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursCours as $coursCour): ?>
            <tr>
                <td><?= $this->Number->format($coursCour->parent_cour_id) ?></td>
                <td><?= $coursCour->has('cour') ? $this->Html->link($coursCour->cour->id, ['controller' => 'Cours', 'action' => 'view', $coursCour->cour->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursCour->parent_cour_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursCour->parent_cour_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursCour->parent_cour_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursCour->parent_cour_id)]) ?>
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
