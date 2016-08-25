<?php

App::uses('AppController', 'Controller');


	
class UsersController extends AppController {
    
	    public function login() {
	    	$this->layout = 'login';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	        	 $this->Session->setFlash(__('Seja bem vindo administrador'), 'flash/success');
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Session->setFlash(__('Usuário e senha não conferem, tente novamente!'), 'flash/error');
	    }
	}
    
    public function registrar()
    {
    	$this->layout = 'login';
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuário registrado com sucesso!'), 'flash/success');
                $this->redirect(array('controller' => 'users', 'action' => 'login'));
            } else {
                $this->Session->setFlash(__('O usuário não foi salvo, tente novamente.'), 'flash/error');
            }
        }
    }
	
	
    public function edit($id = null)
    {
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('Informações atualizadas com sucesso.'), 'flash/success');
                    $this->redirect(array('action' => 'login'));
                } else {
                    $this->Session->setFlash(__('Usuário não pode ser salvo, por favor tente novamente.'), 'flash/error');
                }
            } else {
                $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                $this->request->data = $this->User->find('first', $options);
            }
        
    }
	
    public function logout()
    {
        $this->Session->setFlash(__('Deslogado com sucesso!'), 'flash/success');
        $this->redirect($this->Auth->logout());
    }
}
?>
