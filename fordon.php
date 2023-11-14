<?php 

namespace mittprojekt;

class Fordon
{
    //lagrar fordonets tillverkare
    protected $manufacturer = null;

    function __construct($manufacturer)
    { //vad som ska ske när klassen skapas
        $this->manufacturer = $manufacturer;
        //$manufacturer = $this->getManufacturer(); 
    }

    // tillåter att tillverkaren uppdateras
    function setManufacturer($manufacturer){
        // kolla om det finns innehåll
        if (empty($manufacturer) == false){
        // variabeln blir klassens egenskap. lagrar fordonets egenskaper.
        $this->manufacturer = $manufacturer;
        }
    }
    // metod som returnerar värdet av tillverkaren
    public function getManufacturer(){
        return $this->manufacturer;
    }
}

// skapar ett nytt objekt av Fordon klassen, med tillverkaren satt till "Volvo" = manufacturer egenskap.
$mittfordon = new Fordon('Volvo');