<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="programmes form content">
    <?= $this->Form->create($programme) ?>
    <fieldset>
        <legend><?= __('Créer un programme') ?></legend>
        <?php
            echo $this->Form->control('intitule', ['label' => 'Intitulé', 'required' => true]);
            echo $this->Form->control('explication', ['required' => true]);
            echo $this->Form->control('universites._ids', ['options' => $universites]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Créer'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
