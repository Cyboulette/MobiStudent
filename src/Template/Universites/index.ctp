<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Universite[]|\Cake\Collection\CollectionInterface $universites
 */
?>
<div class="universites index content">
    <h3><?= __('Universités') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
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
                <td><?= h($universite->nom) ?></td>
                <td><?= h($universite->adresse_postale) ?></td>
                <td><?= h($universite->adresse_web) ?></td>
                <td><?= h($universite->adresse_mail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $universite->id], ['class' => 'btn btn-outline-primary']) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, actuellement {{current}} universités sur {{count}} au total')]) ?></p>
    </div>
</div>
