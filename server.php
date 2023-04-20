<?php

$todoList = [
    'Fare la spesa',
    'Andare dal dentista',
    'Stendere i panni',
    'Preparare la cena'
];

header('Content-Type: application/json');
echo json_encode($todoList);