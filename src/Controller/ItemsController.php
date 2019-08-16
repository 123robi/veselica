<?php


namespace App\Controller;


use Cake\Http\Exception\NotFoundException;

class ItemsController extends AppController
{
    public function index() {
        $this->set('items', $this->Items->find());
    }

    public function add() {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success('Shranjeno!');
            }
        }
    }

    public function edit($id = null) {
        if (!$this->Items->exists($id)) {
            throw new NotFoundException(_('Invalid user'));
        }

        $ime = $this->request->getData('ime');
        $cena = $this->request->getData('cena');
        if ($this->request->is(array('post', 'put'))) {
            $item = $this->Items->get($id);

            $item->ime = $ime;
            $item->cena = $cena;

            $this->Items->save($item);
            $this->Flash->success('Shranjeno!');
            return $this->response->withType("json")->withStringBody("Shranjeno");
        }
    }

    public function get($id = null) {
        if (!$this->Items->exists($id)) {
            throw new NotFoundException(_('Invalid user'));
        } else {
            return $this->response->withType("json")->withStringBody($this->Items->get($id));
        }
    }

    public function getItems() {
        $this->set('items', $this->Items->find());
    }

    public function delete($id = null) {
        if (!$this->Items->exists($id)) {
            throw new NotFoundException(_('Invalid user'));
        } else {
            $entity = $this->Items->get($id);
            if ($this->Items->delete($entity)) {
                $this->Flash->success('Zbrisano!');
            } else {
                $this->Flash->success('Napaka!');
            }
        };
    }
}