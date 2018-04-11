<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cour[]|\Cake\Collection\CollectionInterface $cours
 */
?>
<div class="cours index content">
    <h3><?= __('Liste des cours') ?> <a href="cours/add" class="btn btn-success btn-sm">Créer un cours</a></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('libelle', ['label' => 'Libellé']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nb_ects') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cours as $cour): ?>
            <tr>
                <td><?= h($cour->libelle) ?></td>
                <td><?= $this->Number->format($cour->nb_ects) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $cour->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $cour->id], ['class' => 'btn btn-outline-primary btn-sm', 'confirm' => __('Voulez vous vraiment supprimer ce cours ?')]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, actuellement {{current}} cours sur {{count}} au total')]) ?></p>
    </div>
</div>
