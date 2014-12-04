
/**
 * Created by PhpStorm.
 * User: Dawidziu
 * Date: 2014-12-04
 * Time: 14:14
 */
<h2 class="title">Zaloguj się na swoje konto</h2>
<?php
    echo $this->Form->create('User');
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('remember_me', array('label' => 'Zapamiętaj mnie', 'type' => 'checkbox'));
    echo $this->Form->end(array('label' => 'Zaloguj się'));
?>