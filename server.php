<?php
$todos = ['HTML', 'CSS', 'JAVASCRIPT'];

if (isset($_POST['todo'])) {
    $todo = $_POST['todo'];
    header('Content-Type: application/json');
    echo json_encode($todo);
} else {
    header('Content-Type: application/json');
    echo json_encode($todos);
}