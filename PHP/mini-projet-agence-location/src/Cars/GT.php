<?php 

require_once('Voitures.php');
class GT extends Vehicules
{
    use Voiture;
    public function __construct($nom, $trainRoulant, $nbrPlaces, $estDecapotable, $description)
    {
        $this->Nom = $nom;
        $this->trainRoulant = $trainRoulant;
        $this->nbrPlace = $nbrPlaces;
        $this->estDecapotable = $estDecapotable;
        $this->description = $description;

    }
    public function roule()
    {

    }
    public function accelere()
    {

    }
    public function freine()
    {

    }
    public function tourne()
    {
        
    }
}