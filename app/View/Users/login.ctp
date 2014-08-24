<!-- File: /app/View/Users/view.ctp -->
<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Login'); ?></legend>
        <?php
        $divFormGroup = array('class' => 'form-control', 'div' => array('class' => 'form-group'));
        echo $this->Form->input('username', array('label'=> 'Usuario') + $divFormGroup);
        echo $this->Form->input('password', array('label'=> 'Senha') +$divFormGroup);
        ?>
    </fieldset>
<?php echo $this->Form->end(array('label'=>'Logar','class'=>'btn btn-primary')); ?>
</div>