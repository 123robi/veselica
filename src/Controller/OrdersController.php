<?php


namespace App\Controller;


class OrdersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadModel('Items');
    }
    public function addOrder() {
        $items = $this->Items->find();
        $this->set('items', $items);
    }
}