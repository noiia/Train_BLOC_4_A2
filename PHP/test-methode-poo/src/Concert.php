<?php

require_once('HasMenu.php');
require_once('HasAssignedSeats.php');
require_once('Event.php');
require_once('pricingContract.php');
class Concert extends Event implements pricingContract
{
    use HasMenu, HasAssignedSeats;
    public function __construct(string $title, string $date, array $menu, array $assignedSeats, string $room){
        $this->Type = 1;
        $this->Title = $title;
        $this->Date = date($date);
        $this->items = $menu;
        $this->Seats = $assignedSeats;
        $this->Room = 'room '. $room;

    }

    public function getPrice()
    {
        $Price = 10;
        return $this->$Price*1.50;
    }

    public function getSeat(){
        return $this->Seats;
    }
    public function typeOfPayment(){
    }

    public function calculatePrice(bool $student, bool $senior){
        
    }
    public function bankControl(){
        return true;
    }
}