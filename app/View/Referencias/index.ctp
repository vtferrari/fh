<!-- File: /app/View/Referencias/index.ctp -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
    as informações dos posts -->

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