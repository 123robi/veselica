<?php


namespace App\Controller;


use Cake\Event\Event;

class OrdersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadModel('Items');
        $this->loadComponent('Csrf');
        $this->loadComponent('Security');
    }

    public function beforeFilter(Event $event)
    {
        $this->getEventManager()->off($this->Csrf);
        $this->Security->csrfCheck = false;
    }

    public function addOrder() {
        if ($this->request->is('AJAX')) {
            echo $this->request->getData();
        }

        $items = $this->Items->find();
        $this->set('items', $items);
    }
}