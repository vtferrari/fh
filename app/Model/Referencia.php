<?php

class Referencia extends AppModel {

    public $name = 'Referencia';
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );



}
