<!DOCTYPE html>
<html lang="es-ES">
<html>
    <head>
        <title>Formulario</title> 
        <link rel="stylesheet" href="style.css">

        <header>
            <div class="logo">
                <img src="logo.png" alt="logo" style="width:200px;">
                <b>Deseo defender los Derechos Humanos asosiandome a Amnistia Internacional</b>
            </div>
           
        
        </header>
        
<br>
        <p><b>Amnistia Internacional</b> es un organizacion democratica e independiente que no acepta fondos que puedan comprometer su<br>
        trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo mas<br>
        justo. Tu colaboracion, por pequeña que sea, es lo unico que nos permite seguir defendiendo los derechos humanos, asi como<br>
        investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos mas seamos,<br>
        mas fuerza tendremos.</p>

        <h6>Los campos marcados con * son obligatorios</h6>
    </head>
<br>
   
    <div class="container">
            <b>Datos personales</b>
            <form method="POST">
            <?php
    include("donacion.php");
    
    ?>


    <body>
        
        
<div class="input-group">
        <div class="input-box">
        <label for="nombre">*Nombre:</label>
        <input type="text" id="nombre" name="nombre"  required>
        </div>
        
        
        <div class="input-box">
        <label for="apellido1">*Apellido 1:</label>
        <input type="text" id="apellido1" name="apellido1" required>
        </div>

        <div class="input-box">
        <label for="apellido2">Apellido 2:</label> 
        <input type="text" id="apellido2" name="apellido2"> 
        </div>
        
        <div class="input-box">
         <label for="sexo">*Sexo:</label>
         <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        </div>

        <div class="input-box">
            <label for="identificacion">*Identificacion fiscal:</label>
            <select id="identificacion" name="identificacion" required>
               <option value="nif">NIF</option>
               <option value="ine">INE</option>
           </select>
           </div>



        <div class="input-box">
         <label for="numero">Número</label>
        <input type="text" id="numero" name="numero">
        </div>
        
        <div class="input-box">
           
        <label for="tipovia">Tipo de via:</label>
        <select id="tipovia" name="tipovia" >
            <option value="calle">Calle</option>
            <option value="avenida">Avenida</option>
        </select>
        </div>
        <div class="input-box"> 
        <label for="nombrevia">*Nombre de via:</label>
        <input type="text" id="nombrevia" name="nombrevia" required>
        </div>
            
       
        <div class="input-box">
        <label for="codigopostal">*Codigo postal:</label>
        <input type="text" id="codigopostal" name="codigopostal" required>
        </div>
            
        <div class="input-box">
        <label for="provincia">Provincia(Mx)</label> 
        <select id="provincia" name="provincia">
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Nuevo Leon">Nuevo Leon</option>
        </select>
        </div>
        <div class="input-box">
        <label for="numerobloque">*N. ,Bloque, esc...:</label>
        <input type="text" id="numerobloque" name="numerobloque" required>
        </div>
        <div class="input-box">
        <label for="poblacion">*Poblacion:</label>
        <input type="text" id="poblacion" name="poblacion" required>
        </div>
        <div class="input-box">
        <label for="pais">*Pais:</label> 
        <select id="pais" name="pais" required>
            <option value="mexico">Mexico</option>
            <option value="españa">España</option>
        </select>
      </div>

      <div class="input-box">
        <label for="correo">Correo electronico:</label>
        <input type="text" id="correo" name="correo">
        </div>
        <div class="input-box">
        <label for="fechanacimiento">Fecha de nacimiento:</label>
        <input type="text" id="fechanacimiento" name="fechanacimiento" >
        </div>
        <div class="input-box">
        <label for="idioma">Idioma:</label>
        <select id="idioma" name="idioma" >
            <option value="español">Español</option>
            <option value="ingles">Ingles</option>
        </select>
        </div>
        <div class="input-box">
        <label for="telefonocontacto">*Telefono de contacto:</label>
        <input type="text" id="telefonocontacto" name="telefonocontacto" required>
        </div>
        <div class="input-box">
        <label for="profesion">Profesion:</label>
        <select id="profesion" name="profesion">
            <option value="amadecasa">Ama de casa</option>
            <option value="obrero">obrero</option>
        </select>
        </div>
    </div>
</div>
<br>

    <div class="container">
        <b>* Cuota</b>
        <div class="input-box">
            
        <label for="periodo">Periodo:</label>
        <select id="periodo" name="periodo">
            <option value="mes">Mes</option>
            <option value="año">Año</option>
        </select>
        </div>
        <label for="importe">Importe:</label>
        <div class="gender-group">
            <div class="gender-input">
        <input type="radio" id="importe" name="importe" value="9" checked onclick="EnableDisableTB()"> $9
            </div>
            <div class="gender-input">
        <input type="radio" id="importe" name="importe" value="15" onclick="EnableDisableTB()"> $15
        </div>
        <div class="gender-input">
        <input type="radio" id="importe" name="importe" value="25" onclick="EnableDisableTB()"> $25
        </div>
        <div class="gender-input">
        <input type="radio" id="importe" name="importe" value="60" onclick="EnableDisableTB()"> $60
        </div>

        <div class="gender-input">
        <input type="radio" id="otros" name="importe"  value="otro" onclick="EnableDisableTB()"> Otra cantidad: 
        <div class="input-box">
        <input type="text" id="otroimporte" name="importe"  disabled="disabled" placeholder="otra cantidad">

        <script type="text/javascript">
        function EnableDisableTB(){
            var otros=document.getElementById("otros");
            var otroimporte=document.getElementById("otroimporte");
            otroimporte.disabled=otros.checked? false:true;
            otroimporte.value="";
            
            if(!otroimporte.disabled){
                otroimporte.focus();
            }
        }
        </script>
        </div>
        </div>

        <h5>Todas tus aportaciones  a Amnistia Internacional desgravan en la declaracion de la Renta.</h5></div>
    </div>

<br>
<br>

<div class="container">
    
<b>Forma de pago</b>
<div class="input-group"> 
    
    <div class="input-box">
        <label for="entidad">Entidad:</label>
        <input type="text" id="entidad" name="entidad">
    </div>
    <div class="input-box">
        <label for="oficina">Oficina:</label>
        <input type="text" id="oficina" name="oficina">
    </div>
    <div class="input-box">
        <label for="dc">DC:</label>
        <input type="text" id="dc" name="dc">
        </div>
        <div class="input-box">
        <label for="numerocuenta">No. de cuenta:</label>
        <input type="text" id="numerocuenta" name="numerocuenta">
    </div>
</div>

<input type="checkbox" id="politica" name="politica">
        <label for="politica">Acepto la  <u>Politica de privacidad</u> (por favor leela antes de enviar tus datos)*</label><br>
<br>

<div class="continue-button">
    <input type="submit" name="continuar">
    
</div>
<div class="continue-button">
     <a href="datosdonantes.php">donantes</a>
</div>

   
    

    </form>
   
</div>

</div>
    </body>
    

        

</htm>