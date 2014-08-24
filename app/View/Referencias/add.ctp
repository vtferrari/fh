<!-- File: /app/View/Referencias/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Referencia');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('associado_id',array('type'=>'hidden'));
echo $this->Form->end('Save Post');