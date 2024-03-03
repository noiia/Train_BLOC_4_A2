<?php
require_once('HasMenu.php');
require_once('HasAssignedSeats.php');

class Movie extends Event implements pricingContract
{
    use HasMenu, HasAssignedSeats;
    public function __construct(string $title, array $menu, array $assignedSeats, int $room, int $nbrPayment, bool $isStudent, bool $isSenior)
    {
        $this->Type = 2;
        $this->Title = $title;
        $this->items = $menu;
        $this->Seats = $assignedSeats;
        $this->Room = 'room '. $room;
        $this->NbrPayment = $nbrPayment;
        $this->calculatePrice($isStudent, $isSenior);
    }
    public function calculatePrice(bool $student, bool $senior)
    {
        if ($student)
        {
            $this->Price = count($this->Seats) * 5;
        } elseif ($senior){
            $this->Price = count($this->Seats) * 6;
        } else {
            $this->Price = count($this->Seats) * 10;
        }
    }
    public function isUpStairs()
    {
        $this->Room > 5;
    }
    public function bankControl(){
        return true;
    }
}