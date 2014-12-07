<?php

class Rent extends AppModel {
    
    var $name = "Rent";
    var $hasMany = array("Bike","User");
}

