<!-- File: /app/View/Associados/view.ctp -->

<h1><?php echo $associado['Associado']['nome'] . " " . $associado['Associado']['sobrenome'] ?></h1>

<p><small>Created: <?php echo $associado['Associado']['created'] ?></small></p>
<div class="panel panel-default">
    <div class="panel-heading">Dados Pessoais</div>
    <div class="panel-body">
        <p><strong>Nome: </strong><?php echo $associado['Associado']['nome'] . " " . $associado['Associado']['sobrenome'] ?></p>
        <p><strong>Telefone: </strong><?php echo $associado['Associado']['telefone'] ?></p>
        <p><strong>Celular: </strong><?php echo $associado['Associado']['celular'] ?></p>
        <p><strong>Telefone (Comercial): </strong><?php echo $associado['Associado']['telefone_comercial'] ?></p>
        <p><strong>Data Nascimento: </strong><?php echo $associado['Associado']['data_nascimento'] ?></p>
        <p><strong>Estado Civil: </strong><?php echo $associado['Associado']['estado_civil'] ?></p>
        <p><strong>Profissão: </strong><?php echo $associado['Associado']['profissao'] ?></p>
        <p><strong>RG: </strong><?php echo $associado['Associado']['rg'] ?></p>
        <p><strong>CPF: </strong><?php echo $associado['Associado']['cpf'] ?></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Dados Residenciais</div>
    <div class="panel-body">
        <p><strong>CEP: </strong><?php echo $associado['Associado']['cep'] ?></p>
        <p><strong>Endereco: </strong><?php echo $associado['Associado']['endereco'] ?></p>
        <p><strong>Numero: </strong><?php echo $associado['Associado']['numero'] ?></p>
        <p><strong>Complemento: </strong><?php echo $associado['Associado']['complemento'] ?></p>
        <p><strong>Cidade: </strong><?php echo $associado['Associado']['cidade'] ?></p>
        <p><strong>Estado: </strong><?php echo $associado['Associado']['estado'] ?></p>
    </div>
</div>
    <div class="form-group clearfix">
        <?php
        echo $this->html->link(
                'Adicionar Referencias', array('controller' => 'referencias', 'action' => 'add',
            $associado['Associado']['id']), array('class' => 'btn btn-primary pull-right'));
        ?>
    </div>
<div class="panel panel-default">
    <div class="panel-heading">Referencias</div>
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Observação</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($referencias as $referencia): ?>
            <tr>
                <td>
                    <?php echo $referencia['Referencia']['nome']; ?>
                </td>
                <td>
                    <?php echo $referencia['Referencia']['telefone']; ?>
                </td>
                <td>
                    <?php echo $referencia['Referencia']['observacao']; ?>
                </td>
                <td>
                    <?php
                    echo $this->Form->postLink(
                            '<i class="fa fa-trash-o"></i> Remover', 
                            array('controller'=>'referencias','action' => 'delete', $referencia['Referencia']['id']), 
                            array('class' => 'btn btn-default', 'escape' => false),
                            array('confirm' => 'Deseja excluir este registro?')
                            );
                    ?>
                    <?php
                    echo $this->Html->link(
                            '<i class="fa fa-edit"></i> Editar' , 
                            array('controller'=>'referencias','action' => 'edit', $referencia['Referencia']['id']) ,
                            array('class' => 'btn btn-default', 'escape' => false)
                            );
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>