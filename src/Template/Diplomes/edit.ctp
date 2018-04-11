<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="diplomes form content">
    <?= $this->Form->create($diplome) ?>
    <fieldset>
        <legend><?= __('Éditer un diplôme') ?></legend>
        <?php
            echo $this->Form->control('universite_id', ['options' => $universites, 'label' => 'Université', 'required' => true]);
            echo $this->Form->control('intitule', ['label' => 'Intitulé', 'required' => true]);
            echo $this->Form->control('adresse_web');
            echo $this->Form->control('niveau', ['required' => true]);
            echo $this->Form->control('cours._ids', ['options' => $cours, 'label' => 'Cours liés', 'required' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postLink(
        __('Supprimer'),
        ['action' => 'delete', $diplome->id],
        ['confirm' => __('Êtes vous sûr de vouloir supprimer ce diplôme ?'), 'class' => 'btn btn-danger']
    )
    ?>
</div>
