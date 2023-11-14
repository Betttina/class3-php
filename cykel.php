<?php

require_once "fordon.php";

namespace mittprojekt;
use \mittprojekt\Fordon;

//denna klass ärva från fordon
class Cykel extends Fordon {
    
    private $weight = 0;

    function __construct($cycleManufacturer)
    {
       //kallar på parents constructor för att sätta tillverkare
        parent::__construct($cycleManufacturer);
    }

}
