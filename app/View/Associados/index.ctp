<!-- File: /app/View/Associados/index.ctp -->

<h1>Associados</h1>
<?php echo $this->Html->link('<i class="fa fa-plus"></i> Novo Membro', array('action' => 'add'),array('class' => 'btn btn-primary','escape' => false)); ?>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Actions</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
    as informações dos posts -->

    <?php foreach ($associados as $associado): ?>
        <tr>
            <td><?php echo $associado['Associado']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($associado['Associado']['nome'], array('action' => 'view', $associado['Associado']['id'])); ?>
            </td>
            <td>
                <?php
                echo $this->Form->postLink(
                        'Delete', array('action' => 'delete', $associado['Associado']['id']), array('confirm' => 'Are you sure?'));
                ?>
                <?php
                echo $this->Html->link(
                        'Edit', array('action' => 'edit', $associado['Associado']['id']));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>