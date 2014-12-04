<?php
/**
 * Created by PhpStorm.
 * User: Dawidziu
 * Date: 2014-12-04
 * Time: 14:10
 */
class User extends AppModel {

    public $validate = array(
        'username' => array(
            'rule1' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'To pole jest wymagane'
            ),
            'password' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'To pole jest wymagane'
            ),
        )
    );
}