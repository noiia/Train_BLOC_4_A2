<?php

require_once('src\Concert.php');
require_once('src\Play.php');
require_once('src\Movie.php');

function ToString($args) {
    $args->GetMenu();
    if ($args->GetType() == 1){
        $Functions = ['GetTitle', 'GetSeats', 'GetRoom', 'GetMenu', 'GetDate'];

        foreach ($Functions as $functions){
            if (method_exists($args, $functions) && $args->$functions() != ''){
                echo '<br>';
                print_r($args->$functions());
            }
            
        }
    } else if ($args->GetType() == 2){
        $Functions = ['GetTitle', 'GetSeats', 'GetRoom', 'GetMenu'];

        foreach ($Functions as $functions){
            if (method_exists($args, $functions) && $args->$functions() != ''){
                echo '<br>';
                print_r($args->$functions());
            }
            
        }
    }
}

$play = new Play();

print_r($play->GetMenu());

$concert = new Concert('lomepal', '2024-10-20', ['sandwich', 'eau'], ['E80', 'E9'], 'main');

print_r(ToString($concert));

$movie = new Movie('les dents de la mer', ['coca','chips'], ['B4', 'B5'], 7, 2, True, False);

print_r(ToString($movie));