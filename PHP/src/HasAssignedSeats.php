<?php

trait HasAssignedSeats
{
    public string $Type;
    public function GetType() : string
    {
        return $this->Type;
    }
    public string $Title;
    public function GetTitle() : string
    {
        return $this->Title;
    }
    public string $Date;

    public function GetDate() : string
    {
        return $this->Date;
    }
    public string $Room;
    public function GetRoom()
    {
        return $this->Room;
    }
    public array $Seats;

    public function GetSeats() : array
    {
        return $this->Seats;
    }
}