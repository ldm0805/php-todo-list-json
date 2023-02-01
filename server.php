<?php
// Ritorno il file .json in stringa.
$string = file_get_contents('todo-list.json');
// Prendo il file json e lo converto in valore PHP
$todo_list = json_decode($string, true);

//Aggiungo elementi all'array
if (isset($_POST['todoItem'])) {
    $todo_item = $_POST['todoItem'];

    $todo_array = [
        "language" => $todo_item,
        "done" => false,
    ];

    $todo_list[] = $todo_array;
    // Scrivo i dati nel file
    file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
}

header('Content-Type: application/json');
echo json_encode($todo_list);
