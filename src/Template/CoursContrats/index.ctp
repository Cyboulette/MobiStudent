<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursContrat[]|\Cake\Collection\CollectionInterface $coursContrats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cours Contrat'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursContrats index large-9 medium-8 columns content">
    <h3><?= __('Cours Contrats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contrat_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursContrats as $coursContrat): ?>
            <tr>
                <td><?= $coursContrat->has('cour') ? $this->Html->link($coursContrat->cour->id, ['controller' => 'Cours', 'action' => 'view', $coursContrat->cour->id]) : '' ?></td>
                <td><?= $coursContrat->has('contrat') ? $this->Html->link($coursContrat->contrat->id, ['controller' => 'Contrats', 'action' => 'view', $coursContrat->contrat->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursContrat->cour_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursContrat->cour_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursContrat->cour_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursContrat->cour_id)]) ?>
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
