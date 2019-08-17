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
    }

    public function addOrder() {
        if ($this->request->is('AJAX')) {
            echo $this->request->getData()."";
            return $this->response->withType("json")->withStringBody("Shranjeno");
        }

        $items = $this->Items->find();
        $this->set('items', $items);
    }
}
