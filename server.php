<?php

$todoList = json_decode(file_get_contents('todolist.json'), true);

if(isset($_POST['newTask']) && !empty($_POST['newTask'])){
    $todoList[] = ["text" => $_POST['newTask'], "state" => "undone"];
    file_put_contents('todolist.json', json_encode($todoList));
}

if(isset($_POST['updateTask']) && !empty($_POST['updateTask']) && isset($_POST['listIndex']) && !empty($_POST['listIndex'])){
    $todoList[$_POST['listIndex']]['state'] = $_POST['updateTask'];
    file_put_contents('todolist.json', json_encode($todoList));
}
header('Content-Type: application/json');
echo json_encode($todoList);