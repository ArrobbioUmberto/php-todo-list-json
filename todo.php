<?php

$todo = ['HTML', 'CSS', 'Responsive design', 'Javascript', 'PHP', 'Laravel'];

header('Content-Type: application/json');
// in questo modo possiamo modicare un array in un file json 
echo json_encode($todo);
