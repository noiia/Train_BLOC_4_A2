<?php
 
interface pricingContract
{
    public function calculatePrice(bool $student, bool $senior);
}