<?php


$string = file_get_contents('./todo.json');
// visto che il mio file che richiamo e un file json devo trasformarlo in un file php quindi uso json_decode
$todo = json_decode($string, true);
// imposto l'header 


$new_task = isset($_POST['todo']) ? $_POST['todo'] : null;
$new_items = [
    "text" => "$new_task",
    "done" => "false",
];
if ($new_task !== null) {
    array_push($todo, $new_items);
    file_put_contents('./todo.json', json_encode($todo));
}

header('Content-Type: application/json');
// in questo modo possiamo modicare un array in un file json 
echo json_encode($todo);
