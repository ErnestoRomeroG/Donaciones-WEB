<?php
include("con_db.php");
if(isset($_POST['continuar'])){
    if(strlen($_POST['nombre'])>= 1 &&
   strlen($_POST['apellido1'])>= 1 &&
   strlen($_POST['apellido2'])>= 1 &&
   strlen($_POST['sexo'])>= 1 &&
   strlen($_POST['identificacion'])>= 1 &&
   strlen($_POST['numero'])>= 1 &&
   strlen($_POST['tipovia'])>= 1 &&
   strlen($_POST['nombrevia'])>= 1 &&
   strlen($_POST['codigopostal'])>= 1 &&
   strlen($_POST['provincia'])>= 1 &&
   strlen($_POST['numerobloque'])>= 1 &&
   strlen($_POST['poblacion'])>= 1 &&
   strlen($_POST['pais'])>= 1 &&
   strlen($_POST['correo'])>= 1 &&
   strlen($_POST['fechanacimiento'])>= 1 &&
   strlen($_POST['idioma'])>= 1 &&
   strlen($_POST['telefonocontacto'])>= 1 &&
   strlen($_POST['profesion'])>= 1 &&
   strlen($_POST['periodo'])>= 1 &&
   strlen($_POST['importe'])>= 1 &&
   strlen($_POST['entidad'])>= 1 &&
   strlen($_POST['oficina'])>= 1 &&
   strlen($_POST['dc'])>= 1 &&
   strlen($_POST['numerocuenta'])>= 1){
    $nombre= trim($_POST['nombre']);
    $apellido1= trim($_POST['apellido1']);
    $apellido2= trim($_POST['apellido2']);
    $sexo= trim($_POST['sexo']);
    $identificacion= trim($_POST['identificacion']);
    $numero= trim($_POST['numero']);
    $tipovia= trim($_POST['tipovia']);
    $nombrevia= trim($_POST['nombrevia']);
    $codigopostal= trim($_POST['codigopostal']);
    $provincia= trim($_POST['provincia']);
    $numerobloque= trim($_POST['numerobloque']);
    $poblacion= trim($_POST['poblacion']);
    $pais= trim($_POST['pais']);
    $correo= trim($_POST['correo']);
    $fechanacimiento= trim($_POST['fechanacimiento']);
    $idioma= trim($_POST['idioma']);
    $telefonocontacto= trim($_POST['telefonocontacto']);
    $profesion= trim($_POST['profesion']);
    $periodo= trim($_POST['periodo']);
    $importe= trim($_POST['importe']);
    $entidad= trim($_POST['entidad']);
    $oficina= trim($_POST['oficina']);
    $dc= trim($_POST['dc']);
    $numerocuenta= trim($_POST['numerocuenta']);

    $consulta="INSERT INTO datos(nombre, apellido1, apellido2, sexo, identificacion, numero, 
    tipovia, nombrevia, codigopostal, provincia, numerobloque, poblacion, pais, correo, fechanacimiento, 
    idioma, telefonocontacto, profesion, periodo, importe, entidad, oficina, dc, numerocuenta) 
    VALUES ('$nombre','$apellido1','$apellido2','$sexo','$identificacion','$numero','$tipovia','$nombrevia','$codigopostal',
    '$provincia','$numerobloque','$poblacion','$pais','$correo','$fechanacimiento','$idioma','$telefonocontacto','$profesion',
    '$periodo','$importe','$entidad','$oficina','$dc','$numerocuenta')";

    $resultado=mysqli_query($conex,$consulta);
    if($resultado){
        ?>
        <h3 class="ok">¡Gracias por tu donacion!</h3>
        <?php
    }else{
        ?>
         <h3 class="bad">No se ha podido enviar el pago</h3>
        <?php
    }
   } else{
        ?>
         <h3 class="bad">Por favor complete los campos</h3>
        <?php
   }
}

   

?>