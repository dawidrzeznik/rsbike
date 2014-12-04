<?php
/**
 * Created by PhpStorm.
 * User: Dawidziu
 * Date: 2014-12-04
 * Time: 14:13
 */

class UsersController extends AppController {

    public function login() {
        if ($this->Auth->loggedIn()) { // sprawdzamy czy już zalogowany a jeśli tak przekierowanie na stronę główną
            $this->redirect(array('controller' => 'index', 'action' => 'index'));
        }
        if ($this->request->is('post')) { // kontrolujemy czy zapytanie zostało wysłane metodą 'post'
            if ($this->Auth->login()) { // logujemy się
                if ($this->request->data['User']['remember_me'] == 1) { // jeśli w formularzu zaznaczyliśmy 'zapamiętaj mnie' niszczymy ewentualnie już istniejace ciasteczko oraz tworzymy nowe
                    unset($this->request->data['User']['remember_me']);
                    $this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
                    $this->Cookie->write('remember_me_cookie', $this->request->data['User'], true, '2 weeks');
                }
                $this->User->id = $this->Auth->user('id');
                $this->User->saveField('last_login', date('Y-m-d H:i:s')); // zapisujemy czas logowania
                $this->redirect($this->Auth->redirect()); // przekierowanie na stronę główną
            } else {
                $this->Session->setFlash('Nieprawidłowy login lub hasło'); // jeśli nie powiodło się
            }
        }
    }

    public function logout() {
        if ($this->Auth->loggedIn()) {
            $this->Cookie->delete('remember_me_cookie'); // niszczymy ciasteczko
            $this->redirect($this->Auth->logout()); // logout
        } else {
            $this->redirect(array('action' => 'login'));
        }

    }
}