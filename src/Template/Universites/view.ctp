<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Universite $universite
 */
?>
<div class="universites view large-9 medium-8 columns content">
    <h3><?= h($universite->nom) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($universite->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Postale') ?></th>
            <td><?= h($universite->adresse_postale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Web') ?></th>
            <td><?= h($universite->adresse_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Mail') ?></th>
            <td><?= h($universite->adresse_mail) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Diplômes liés') ?></h4>
        <?php if (!empty($universite->diplomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Intitule') ?></th>
                <th scope="col"><?= __('Adresse Web') ?></th>
                <th scope="col"><?= __('Niveau') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($universite->diplomes as $diplomes): ?>
            <tr>
                <td><?= h($diplomes->intitule) ?></td>
                <td><?= h($diplomes->adresse_web) ?></td>
                <td><?= h($diplomes->niveau) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['controller' => 'Diplomes', 'action' => 'edit', $diplomes->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Contrats liés') ?></h4>
        <?php if (!empty($universite->contrats)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Diplôme') ?></th>
                    <th scope="col"><?= __('Demande de mobilité') ?></th>
                    <th scope="col"><?= __('Programme') ?></th>
                    <th scope="col"><?= __('Durée') ?></th>
                    <th scope="col"><?= __('État') ?></th>
                    <th scope="col"><?= __('Ordre') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($universite->contrats as $contrat): ?>
                    <tr>
                        <td><?= $contrat->has('diplome') ? $this->Html->link($contrat->diplome->intitule, ['controller' => 'Diplomes', 'action' => 'edit', $contrat->diplome->id]) : '' ?></td>
                        <td><?= $contrat->has('demande_mobilite') ? $this->Html->link($contrat->demande_mobilite->id, 'http://localhost:8080/MobiStudentJSP/mobilites?action=edit&id='.$contrat->demande_mobilite->id, ['target' => '_blank']) : '' ?></td>
                        <td><?= $contrat->has('programme') ? $this->Html->link($contrat->programme->intitule, ['controller' => 'Programmes', 'action' => 'edit', $contrat->programme->id]) : '' ?></td>
                        <td><?= $this->Number->format($contrat->duree) ?></td>
                        <td><?= h($contrat->etat) ?></td>
                        <td><?= h($contrat->ordre) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Modifier'), ['controller' => 'Contrats', 'action' => 'edit', $contrat->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
