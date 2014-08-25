<!-- File: /app/View/Referencias/edit.ctp -->

<h1>Referencias</h1>


<div class="panel panel-default">
    <div class="panel-heading">Referencias</div>
    <div class="panel-body">
        <?php
        $divFormGroup = array('class' => 'form-control', 'div' => array('class' => 'form-group col-sm-4'));
        echo $this->Form->create('Referencia', array('action' => 'edit'));
        echo $this->Form->input('nome', $divFormGroup);
        echo $this->Form->input('telefone', array('class' => 'form-control mask-8or9digitsPhone') + $divFormGroup);
        echo $this->Form->input('observacao', $divFormGroup);
        echo $this->Form->input('associado_id', array('type' => 'hidden'));
        echo $this->Form->input('id', array('type' => 'hidden'));
        ?>
        <div class="form-group col-sm-12">
            <?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'btn btn-primary')); ?>
        </div>
    </div>
</div>