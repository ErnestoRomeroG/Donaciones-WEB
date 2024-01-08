<?php 
//$id=$_GET['id'];
include("con_db.php");
mysqli_query($conex, "DELETE FROM datos");

    echo "<script languaje='Javascript'>
    alert('los datos se eliminaron');
    location.assign('formulario.php');
    </script>";


?>