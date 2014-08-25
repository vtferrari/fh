<!-- File: /app/View/User/index.ctp -->

<h1>Usuarios</h1>
<div class="form-group clearfix">
    <?php
    $divFormGroup = array('class' => 'btn btn-primary pull-right ', 'escape' => false);
    echo $this->Html->link('<i class="fa fa-plus"></i> Novo Usuario', array('action' => 'add'), $divFormGroup);
    ?>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Membros Associados</div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Nivel</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['User']['id']; ?></td>
                <td><?php echo $user['User']['username']; ?></td>
                <td><?php echo $user['User']['role']; ?></td>
                <td>
                    <?php
                    echo $this->Form->postLink(
                            '<i class="fa fa-trash-o"></i> Remover', 
                            array('action' => 'delete', $user['User']['id']), 
                            array('class' => 'btn btn-default', 'escape' => false),
                            array('confirm' => 'Deseja excluir este registro?')
                            );
                    ?>
                    <?php
                    echo $this->Html->link(
                            '<i class="fa fa-edit"></i> Editar' , 
                            array('action' => 'edit', $user['User']['id']) ,
                            array('class' => 'btn btn-default', 'escape' => false)
                            );
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>