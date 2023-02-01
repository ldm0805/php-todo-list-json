<?php 

    $string = file_get_contents('todo-list.json');
    //Converto la stringa in array associativo.
    $todo_list = json_decode($string, true);

    header('Content-Type: application/json');
    
    echo json_encode($todo_list);


?>