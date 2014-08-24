<!-- File: /app/View/Associados/add.ctp -->

<div class="panel panel-default">
    <div class="panel-heading">Dados Pessoais</div>
    <div class="panel-body">
        <?php
        $divFormGroup = array('class' => 'form-control', 'div' => array('class' => 'form-group col-sm-4'));
        echo $this->Form->create('Associado');
        echo $this->Form->input('nome', $divFormGroup);
        echo $this->Form->input('sobrenome', $divFormGroup);
        echo $this->Form->input('telefone', $divFormGroup);
        echo $this->Form->input('celular', $divFormGroup);
        echo $this->Form->input('telefone_comercial', $divFormGroup);
        echo $this->Form->input('data_nascimento', array('minYear' => date('Y') - 90,'maxYear' => date('Y') - 4,'dateFormat' => 'DMY','class' => 'form-control col-xs-4 date', 'div' => array('class' => 'form-group col-sm-12')));
        echo $this->Form->input('estado_civil', $divFormGroup);
        echo $this->Form->input('profissao', $divFormGroup);
        echo $this->Form->input('rg', $divFormGroup);
        echo $this->Form->input('cpf', $divFormGroup);
        ?>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Dados Residenciais</div>
    <div class="panel-body">
        <?php
        echo $this->Form->input('cep', $divFormGroup);
        echo $this->Form->input('endereco', $divFormGroup);
        echo $this->Form->input('numero', $divFormGroup);
        echo $this->Form->input('complemento', $divFormGroup);
        echo $this->Form->input('bairro', $divFormGroup);
        echo $this->Form->input('cidade', $divFormGroup);
        echo $this->Form->input('estado', $divFormGroup);
        ?>
        <div class="form-group col-sm-12">
            <?php echo $this->Form->end(array('label'=>'Salvar','class'=>'btn btn-primary')); ?>
        </div>
    </div>
</div>

