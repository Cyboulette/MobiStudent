<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="etudiants form content">
    <?= $this->Form->create($etudiant) ?>
    <fieldset>
        <legend><?= __('Ajouter un étudiant') ?></legend>
        <?php
            echo $this->Form->control('diplome_id', ['options' => $diplomes, 'label' => 'Diplôme actuel', 'required' => true]);
            echo $this->Form->control('num_etudiant', ['type' => 'number', 'required' => true, 'label' => 'N° étudiant']);
            echo $this->Form->control('nom', ['required' => true]);
            echo $this->Form->control('prenom', ['required' => true, 'label' => 'Prénom']);
            echo $this->Form->control('email', ['required' => true]);
            echo $this->Form->control('cv');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Créer'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
