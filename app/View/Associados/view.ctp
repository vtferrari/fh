<!-- File: /app/View/Associados/view.ctp -->

<h1><?php echo $associado['Associado']['nome'] . " " . $associado['Associado']['sobrenome'] ?></h1>

<p><small>Created: <?php echo $associado['Associado']['created'] ?></small></p>
<div class="panel panel-default">
    <div class="panel-heading">Dados Pessoais</div>
    <div class="panel-body">
        <p><?php echo $associado['Associado']['nome'] . " " . $associado['Associado']['sobrenome'] ?></p>

    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Residenciais</div>
    <div class="panel-body">
        <p><?php echo $associado['Associado']['endereco'] ?></p>

    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Referencias</div>
    <div class="panel-body">
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Actions</th>
                <th>Created</th>
            </tr>

            <?php foreach ($referencias as $referencia): ?>
                <tr>
                    <td><?php echo $referencia['Referencia']['id']; ?></td>
                    <td>
                        <?php echo $this->Html->link($referencia['Referencia']['title'], array('action' => 'view', $referencia['Referencia']['id'])); ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->postLink(
                                'Delete', array('action' => 'delete', $referencia['Referencia']['id']), array('confirm' => 'Are you sure?'));
                        ?>
                    </td>
                    <td><?php echo $referencia['Referencia']['created']; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    <div class="form-group">
        <?php
        echo $this->html->link(
                'Add', array('controller' => 'referencias', 'action' => 'add',
            $associado['Associado']['id']),array('class'=>'btn btn-primary'));
        ?>
    </div>
    </div>
</div>