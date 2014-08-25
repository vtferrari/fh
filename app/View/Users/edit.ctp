<!-- File: /app/View/Posts/edit.ctp -->



<h1>Usuarios</h1>


<div class="panel panel-default">
    <div class="panel-heading">Referencias</div>
    <div class="panel-body">
        <?php
        $divFormGroup = array('class' => 'form-control', 'div' => array('class' => 'form-group col-sm-4'));
        echo $this->Form->create('User', array('action' => 'edit'));
        echo $this->Form->input('username', $divFormGroup);
        echo $this->Form->input('password', array('label' => 'senha') + $divFormGroup);
        echo $this->Form->input('role',$divFormGroup+ array('label' => 'Nivel',
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('associado_id', array('type' => 'hidden'));
        ?>
        <div class="form-group col-sm-12">
            <?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'btn btn-primary')); ?>
        </div>
    </div>
</div>
