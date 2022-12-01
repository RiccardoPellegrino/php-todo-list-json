<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = './todo.json';

$file_text = file_get_contents($file_url);
$list = json_decode($file_text); 

if(isset($_POST['newTask'])) {

    $newTodo = [
        'text' => $_POST['newTask'],
        'done' => false,
    ];

    array_push($list, $newTodo);

    file_put_contents($file_url, json_encode($list));

} else if(isset($_POST['index']) && isset($_GET['done'])) {

    $i = intval($_POST['index']);
    $list[$i]->done = !$list[$i]->done;
    file_put_contents($file_url, json_encode($list));
    

} else if(isset($_POST['index']) && isset($_GET['delete'])) {

    $i = intval($_POST['index']);
    array_splice($list, $i, 1);
    file_put_contents($file_url, json_encode($list));

} else {

    header('Content-Type: application/json');
    echo json_encode($list);

}



?>