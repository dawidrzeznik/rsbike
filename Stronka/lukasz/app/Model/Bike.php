<?php

class Bike extends AppModel {
    
    var $name = "Bike";
     var $belongsTo = array("Rent");
}
