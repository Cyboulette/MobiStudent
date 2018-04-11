<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programme[]|\Cake\Collection\CollectionInterface $programmes
 */
?>
<div class="programmes index content">
    <h3><?= __('Programmes') ?> <a href="programmes/add" class="btn btn-success btn-sm">Créer un programme</a></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('intitule', 'Intitulé') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programmes as $programme): ?>
            <tr>
                <td><?= h($programme->intitule) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $programme->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $programme->id], ['class' => 'btn btn-outline-primary btn-sm', 'confirm' => __('Voulez vous vraiment supprimer ce programme ?')]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Premier')) ?>
            <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
            <?= $this->Paginator->last(__('Dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, actuellement {{current}} programmes sur {{count}} au total')]) ?></p>
    </div>
</div>
