<?php

include ('db.php');

if (isset($_POST['save_task'])){
    // Guardando lo que viene en post en las variables title y description
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    //Creando la query para hacer el insert en la base de datos
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    // Pasando coneccion y query para guardar con mysqli_query
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }
$_SESSION['message'] = 'Task saved succesfully';
$_SESSION['message_type'] = 'success';

    //Redireccion a index
header("Location:index.php");
}

?>