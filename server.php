<?php

$todoList = [
    'Fare la spesa',
    'Andare dal dentista',
    'Stendere i panni',
    'Preparare la cena'
];

if(isset($_POST['newTask']) && !empty($_POST['newTask'])){
    $todoList[] = $_POST['newTask'];
}

header('Content-Type: application/json');
echo json_encode($todoList);