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
        $this->loadModel('Narocila');
        $this->loadModel('Narocilaitems');
    }

    public function addOrder() {
        if ($this->request->is('AJAX')) {
            $session = $this->getRequest()->getSession();
            $narocila = $this->Narocila->newEntity();
            $narocila->user_id = $session->read('User')->id;
            $this->Narocila->save($narocila);
            foreach ($this->request->getData() as $id => $q) {
                $narocilaitem = $this->Narocilaitems->newEntity();
                $narocilaitem->item_id = $id;
                $narocilaitem->narocilo_id = $narocila->id;
                $narocilaitem->kolicina = $q;
                $this->Narocilaitems->save($narocilaitem);
            }
            return $this->response->withType("json")->withStringBody("Shranjeno");
        }

        $items = $this->Items->find();
        $this->set('items', $items);
    }

    public function index() {
        $narocila = $this->Narocilaitems->find();
        $narocila->innerJoinWith('Narocila', function ($q) {
            $session = $this->getRequest()->getSession();
            return $q
                ->where(['Narocila.user_id' => $session->read('User')->id]);
        });
        $narocila->innerJoinWith('Items');
        $narocila->select( ['narocilo_id', 'Items.ime', 'Narocilaitems.kolicina', 'Narocila.placano', 'Items.cena']);

        $this->set('orders',$narocila);
    }
}
