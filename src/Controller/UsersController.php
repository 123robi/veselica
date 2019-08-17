<?php


namespace App\Controller;


class UsersController extends AppController
{
    public function index() {
        $user = $this->Users->newEntity();
        $session = $this->getRequest()->getSession();
        if ($this->request->is('post')) {
            $existingUser = $this->Users->findByIme($this->request->getData('ime'))->first();
            if (!$existingUser) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $this->Users->save($user);
            } else {
                $user = $existingUser;
            }
            $session->write('User', $user);
        }
        $this->set('user', $user);
    }
}
