<?php

$inc=include("con_db.php");
if($inc){
    $consulta="SELECT * FROM datos";
    $resultado=mysqli_query($conex, $consulta);
    if($resultado){
        while($row=$resultado->fetch_array()){
            $id=$row['id'];
            $nombre=$row['nombre'];
            $apellido1= $row['apellido1'];
            $apellido2= $row['apellido2'];
            $sexo= $row['sexo'];
            $identificacion= $row['identificacion'];
            $numero= $row['numero'];
            $tipovia= $row['tipovia'];
            $nombrevia= $row['nombrevia'];
            $codigopostal= $row['codigopostal'];
            $provincia= $row['provincia'];
            $numerobloque= $row['numerobloque'];
            $poblacion= $row['poblacion'];
            $pais= $row['pais'];
            $correo= $row['correo'];
            $fechanacimiento= $row['fechanacimiento'];
            $idioma= $row['idioma'];
            $telefonocontacto= $row['telefonocontacto'];
            $profesion= $row['profesion'];
            $periodo= $row['periodo'];
            $importe= $row['importe'];
            $entidad= $row['entidad'];
            $oficina= $row['oficina'];
            $dc= $row['dc'];
            $numerocuenta= $row['numerocuenta'];
            ?>
            <div>
                <link rel="stylesheet" href="estilosdatos.css">
                <h2><?php echo $id; ?></h2>
                <div id="main-container">
                    <table>
                        <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>Apellido 1:</th>
                            <th>Apellido 2:</th>
                            <th>Sexo:</th>
                            <th>Identificacion:</th>
                            <th>Numero ID:</th>
                            <th>Tipo de via:</th>
                            <th>Nombre de via:</th>
                            <th>Codigo postal:</th>
                            <th>Provincia:</th>
                            <th>Numero de bloque:</th>
                            <th>Poblacion:</th>
                            <th>Pais:</th>
                            <th>Correo:</th>
                            <th>Fecha de Nacimiento:</th>
                            <th>Idioma:</th>
                            <th>Telefono de contacto:</th>
                            <th>Profesion:</th>
                            <th>Periodo:</th>
                            <th>Importe:</th>
                            <th>Entidad:</th>
                            <th>Oficina:</th>
                            <th>DC:</th>
                            <th>Numero de cuenta:</th>
                        </tr></thead>
                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $apellido1; ?></td>
                            <td><?php echo $apellido2; ?></td>
                            <td><?php echo $sexo; ?></td>
                            <td><?php echo $identificacion; ?></td>
                            <td> <?php echo $numero; ?></td>
                            <td><?php echo $tipovia; ?></td>
                            <td><?php echo $nombrevia; ?></td>
                            <td><?php echo $codigopostal; ?></td>
                            <td><?php echo $provincia; ?></td>
                            <td><?php echo $numerobloque; ?></td>
                            <td> <?php echo $poblacion; ?></td>
                            <td><?php echo $pais; ?></td>
                            <td><?php echo $correo; ?></td>
                            <td><?php echo $fechanacimiento; ?></td>
                            <td><?php echo $idioma; ?></td>
                            <td><?php echo $telefonocontacto; ?></td>
                            <td><?php echo $profesion; ?></td>
                            <td><?php echo $periodo; ?></td>
                            <td><?php echo $importe; ?></td>
                            <td><?php echo $entidad; ?></td>
                            <td><?php echo $oficina; ?></td>
                            <td><?php echo $dc; ?><br></td>
                            <td><?php echo $numerocuenta; ?></td>
                        </tr>
                        <tr>
                        
                        
                        </tr>
                    <p>
                    </table>
                    <a href="borrar.php">Eliminar</a>
                    <a href="editardatos.php">Editar</a>
                    <a href="formulario.php">regresar</a>
            <?php
        }
    }
}
?>