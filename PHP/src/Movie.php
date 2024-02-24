<?php
require_once('HasMenu.php');
require_once('HasAssignedSeats.php');
require_once('pricingContract.php');
class Movie {
    use HasMenu, HasAssignedSeats;

    public function __construct(string $title, array $menu, array $assignedSeats, int $room, int $nbrPayment){
        $this->Type = 2;
        $this->Title = $title;
        $this->items = $menu;
        $this->Seats = $assignedSeats;
        $this->Room = 'room '. $room;

        if ($room > 5 ){
            echo '<p> scéance à l\'étage';
        }
    }
}