<!-- File: /app/View/Associados/index.ctp -->

<h1>Associados</h1>

<hr/>
<div class="form-group">
    <form action="/FraternidadeHumana/associados" id="AssociadoIndexForm" method="post" accept-charset="utf-8">
        <div class="input-group custom-search-form">
            <div style="display:none;">
                <input type="hidden" name="_method" value="POST">
            </div>  
            <input type="text" class="form-control" placeholder="Buscar..." name="data[Associado][nome]" id="AssociadoNome">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
</div>

<div class="form-group clearfix">
    <?php
    $divFormGroup = array('class' => 'btn btn-primary pull-right ', 'escape' => false);
    echo $this->Html->link('<i class="fa fa-plus"></i> Novo Membro', array('action' => 'add'), $divFormGroup);
    ?>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Membros Associados</div>

    <table class="table table-striped">
        <tr>
            <th>Nº</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Cidade</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($associados as $associado): ?>
            <tr>
                <td><?php echo $associado['Associado']['id']; ?></td>
                <td>
                    <?php echo $this->Html->link($associado['Associado']['nome'] . " " . $associado['Associado']['sobrenome'], array('action' => 'view', $associado['Associado']['id'])); ?>
                </td>
                <td><?php echo $associado['Associado']['telefone']; ?></td>
                <td><?php echo $associado['Associado']['celular']; ?></td>
                <td><?php echo $associado['Associado']['cidade']; ?></td>
                <td>
                    <?php
                    echo $this->Form->postLink(
                            '<i class="fa fa-trash-o"></i> Remover', 
                            array('action' => 'delete', $associado['Associado']['id']), 
                            array('class' => 'btn btn-default', 'escape' => false),
                            array('confirm' => 'Deseja excluir este registro?')
                            );
                    ?>
                    <?php
                    echo $this->Html->link(
                            '<i class="fa fa-edit"></i> Editar' , 
                            array('action' => 'edit', $associado['Associado']['id']) ,
                            array('class' => 'btn btn-default', 'escape' => false)
                            );
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>