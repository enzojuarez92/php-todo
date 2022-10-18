<?php

include_once '../connection.php';

try {


    $id = $_GET['id'];

    if ($id) {
        $query = 'DELETE FROM tasks WHERE id = ?';
        $sent = $conn->prepare($query);
        $sent->execute(array($id));
    }

    header('location:../index.php');
} catch (PDOException $e) {
    echo 'ERROR_DELETE_TASK' . $e->getMessage() . '<br>';
    die();
}
