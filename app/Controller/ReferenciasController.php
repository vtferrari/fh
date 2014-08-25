<?php

class ReferenciasController extends AppController {

    public $helpers = array('Html', 'Form');
    public $name = 'Referencias';
    public $components = array('Session');

    public function add($associadoId = null) {
        if ($this->request->is('get')) {
            $this->request->data['Referencia']['associado_id'] = $associadoId;
        } else {
            if ($this->Referencia->save($this->request->data)) {
                $this->Session->setFlash('Referencia adicionada com sucesso.');
                $this->redirect(array('controller' => 'associados', 'action' => 'view', $this->request->data['Referencia']['associado_id']));
            }
        }
    }

    function edit($id = null) {
        $this->Referencia->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Referencia->read();
        } else {
            if ($this->Referencia->save($this->request->data)) {
                $this->Session->setFlash('Referencia atualizada com sucesso.');
                $this->redirect(array('controller' => 'associados', 'action' => 'view', $this->request->data['Referencia']['associado_id']));
            }
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Referencia->id = $id;
        $ref = $this->Referencia->read();
        if ($this->Referencia->delete($id)) {
            $this->Session->setFlash('Referencia removida com sucesso.');
            $this->redirect(array('controller' => 'associados', 'action' => 'view',$ref['Referencia']['associado_id']));
        }
    }

}
