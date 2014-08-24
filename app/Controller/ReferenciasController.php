<?php

class ReferenciasController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Referencias';
    public $components = array('Session');

    public function index($associadoId = null) {
        if ($this->request->is('get')) {
            $conditions = array("Referencia.associado_id" => $associadoId);
            $this->set('referencias', $this->Referencia->find("all", array('conditions' => $conditions)));
        }
    }

    public function view($id = null) {
        $this->Referencia->id = $id;
        $this->set('referencia', $this->Referencia->read());
    }

    public function add($associadoId = null) {
        if ($this->request->is('get')) {
            $this->request->data['Referencia']['associado_id'] = $associadoId;
        } else {
            if ($this->Referencia->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('controller'=>'associados','action' => 'index'));
            }
        }
    }

    function edit($id = null) {
        $this->Referencia->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Referencia->read();
        } else {
            if ($this->Referencia->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Referencia->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

}
