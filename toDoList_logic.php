<?php 
    
    $error = '';

    $db = mysqli_connect('localhost', 'root', '', 'todolist');
    
    if(ISSET($_POST['submit'])) {
        $task = $_POST['task'];
        if(empty($task)) {
            $error = "Debes completar el campo, no puede quedar vacío";
        } else {
        mysqli_query($db, "INSERT INTO todo (task) VALUE ('$task')");
        header('location:index.php#toDoList');
        }
    }

    $showTasks = mysqli_query($db, "SELECT * FROM todo");

    //delete task
    if(ISSET($_GET['dlt_task'])) {
        $id = $_GET['dlt_task'];

        mysqli_query($db, "DELETE FROM todo WHERE id=$id");
        header('location:index.php#toDoList');    
    }
?>