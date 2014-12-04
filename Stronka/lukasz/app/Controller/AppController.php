<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

   /* public $helpers = array(
        'Session',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );

    public $components = array(
        'Auth' => array(
            'flash' => array(
                'element' => 'alert',
                'key' => 'auth',
                'params' => array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-error'
                )
            )
        )
    ); */

    public $components = array(
        'Cookie',
        'Auth'
    );

    public function beforeFilter() {
        $this->Auth->deny(); // z góry blokujemy dostęp do każdej strony
        if (!$this->Auth->loggedIn() && $this->Cookie->read('remember_me_cookie')) { //sprawdzamy czy  użytkownik nie jest już zalogowany oraz czy istnieje ciasteczko pozwalające na zalogowanie się
            $cookie = $this->Cookie->read('remember_me_cookie');
            $user = $this->User->find('first', array( // sprawdzamy czy w bazie istnieje użytkownik o loginie i haśle pozostawionym w ciasteczku
                'conditions' => array(
                    'User.username' => $cookie['username'],
                    'User.password' => $cookie['password']
                )
            ));


            if ($user && !$this->Auth->login($user['User'])) { // jeśli te dane są nieprawidłowe przekierowanie na formularz logowania
                $this->redirect(array('controller' => 'users', 'action' => 'login'));
            }
        }
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login'); // tutaj definiujemy akcje logowania
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login'); // akcja wylogowania
        $this->Auth->loginRedirect = array('controller' => 'index', 'action' => 'index'); // akcja wykonywana po poprawnym zalogowaniu się
    }
}
