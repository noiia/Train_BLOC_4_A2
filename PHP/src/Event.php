<?php

abstract class Event 
{
    abstract public function typeOfPayment();

    public function nbrIterations($args, $totalPrice){
        $totalPrice /= $args;
        echo 'paiement en ' . $args . ' correspondant à ' . $totalPrice . ' par mensualité.';
    }
}