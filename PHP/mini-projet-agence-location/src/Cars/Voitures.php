<?php
trait Voiture
{
    public string $Nom;
    public function getNom()
    { 
        return $this->Nom; 
    }
    public int $nbrRouesMotrice;
    public function getNbrRouesMotrice(){
        $this->nbrRouesMotrice;
    }
    public int $trainRoulant;
    public function getTrainRoulant(){
        $this->trainRoulant;
    }
    public int $nbrPlace;
    public function getNbrPlace(){
        $this->nbrPlace;
    }
    public bool $estDecapotable;
    public function EstDecapotable(){
        $this->estDecapotable;
    }
    public float $prix;
    public function GetPrix(){
        $this->prix;
    }

    public string $description;
    public function GetDescription(){
        $this->description;
    } 
}