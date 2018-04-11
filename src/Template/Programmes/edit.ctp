<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="programmes form content">
    <?= $this->Form->create($programme) ?>
    <fieldset>
        <legend><?= __('Modifier un programme') ?></legend>
        <?php
        echo $this->Form->control('intitule', ['label' => 'Intitulé', 'required' => true]);
        echo $this->Form->control('explication', ['required' => true]);
        echo $this->Form->control('universites._ids', ['options' => $universites]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postLink(
        __('Supprimer'),
        ['action' => 'delete', $programme->id],
        ['confirm' => __('Êtes vous sûr de vouloir supprimer ce programme ?'), 'class' => 'btn btn-danger']
    )
    ?>
</div>