<?php

$todoList = json_decode(file_get_contents('todolist.json'), true);

if(isset($_POST['newTask']) && !empty($_POST['newTask'])){
    $todoList[] = $_POST['newTask'];
    file_put_contents('todolist.json', json_encode($todoList));
}

header('Content-Type: application/json');
echo json_encode($todoList);