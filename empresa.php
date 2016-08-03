<?php
    $nit=$_POST['nit'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $pais=$_POST['pais'];
    $ciudad=$_POST['ciudad'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $web=$_POST['web'];


    $conexion=mysql_connect('localhost','root','');
    if(!$conexion){
      die('no se pudo conectar: '.mysql_error());
    }
    mysql_select_db("soft-facture",$conexion) or die("no se pudo concetar");
    mysql_query("INSERT INTO empresa(nit,nombre_empresa,direccion,pais,ciudad,telefono,email,web)
                 VALUES ('$nit','$nombre','$direccion','$pais','$ciudad','$telefono','$email','$web')",$conexion);
    echo "se pudo añadir";
    mysql_close($conexion);
   ?>


