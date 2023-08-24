<?php
include 'connection.php';
include 'functions.php';
$table = 'tasks';
$errors = array();
$tasks = selectAll($table);

if(isset($_POST['add-task'])){
    if(empty($_POST['task'])){
        array_push($errors, "Enter A task");
    }

    if(count($errors) === 0){
    unset($_POST['add-task']);
    $task_id = create($table, $_POST);
    header('location: index.php');
    exit();
}
}



if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    header('location: index.php');
    exit();
}

?>