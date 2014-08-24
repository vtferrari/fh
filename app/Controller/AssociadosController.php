<?php

class AssociadosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Associados';
    public $components = array('Session');


    public function index() {
        $this->set('associados', $this->Associado->find('all'));
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
