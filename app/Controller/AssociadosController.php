<?php

class AssociadosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Associados';
    public $components = array('Session');

    public function index() {
        if ($this->request->is('post')) {
            $conditions = array("Associado.nome LIKE" => '%' . $this->request->data['Associado']['nome'] . '%');
            $this->set('associados', $this->Associado->find("all", array('conditions' => $conditions)));
        } else {
            $this->set('associados', $this->Associado->find('all'));
        }
    }

    public function view($id = null) {
        if ($this->request->is('get')) {
            $this->Associado->id = $id;
            $this->set('associado', $this->Associado->read());
            $this->loadModel('Referencia');
            $conditions = array("Referencia.associado_id" => $id);
            $this->set('referencias', $this->Referencia->find("all", array('conditions' => $conditions)));
        }
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Associado->save($this->request->data)) {
                $this->Session->setFlash('Usuario Salvo Com Sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function edit($id = null) {
        $this->Associado->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Associado->read();
        } else {
            if ($this->Associado->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Associado->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

}
