<?php


$string = file_get_contents('./todo.json');

$todo = json_decode($string, true);

header('Content-Type: application/json');
// in questo modo possiamo modicare un array in un file json 
echo json_encode($todo);
