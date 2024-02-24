<?php 

trait HasMenu
{
    public array $items;
    public function GetMenu() : array
    {
        if (isset($this->items)){
            return $this->items;
        } else {
            return ['error' => 'blank array'];
        }
    }
}