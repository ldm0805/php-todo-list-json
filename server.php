<?php
// Ritorno il file .json in stringa.
$string = file_get_contents('todo-list.json');
// Prendo il file json e lo converto in valore PHP
$todo_list = json_decode($string, true);

//Aggiungo elementi all'array
if (isset($_POST['todoItem']) && trim($_POST['todoItem']) != '') {
    $todo_item = $_POST['todoItem'];

    $todo_array = [
        "language" => $todo_item,
        "done" => false,
    ];

    $todo_list[] = $todo_array;
    // Scrivo i dati nel file
    file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
}

//Eliminazione elemento
if (isset($_POST['delete'])) {
    unset($todo_list[$_POST['delete']]);
    file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
}
//Modifica elemento
if (isset($_POST['edit'])) {
    array_replace($todo_list[$_POST['edit']]);
    file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
}
//modifica
if (isset($_POST['edit'])) {
    $replacement = array($_POST['edit'] => array(
        "language" => $_POST['language_edit'],
        "done" => false
    ));
    $todo_list = array_replace($todo_list, $replacement);
    file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
}

header('Content-Type: application/json');
echo json_encode($todo_list);
