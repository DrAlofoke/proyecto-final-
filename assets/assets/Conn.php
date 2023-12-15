<?php
//conectamos con el servidor
$conectar= mysql_connect('localhost','root', '');
// verificarmos la conexion
if(!$conectar){
    echo "No se puede conecyar";
}else{
    $base= mysql_select_db("datos");
    if(!$base){
        echo "No se encontro la db";
    }
}
//recuperar las variables
$Nombre = $_POST['Nombre'];
$email = $_POST['email'];
$Contraseña = $_POST['Contraseña'];
$Confirmar_Contraseña = $_POST['Confirmar_Contraseña'];

//hacemos la consulta
$sql = "INSERT INTO datos Values ('$Nombre',
                                 '$email',
                                 '$Contraseña',
                                 '$Confirmar_Contraseña')";

// ejecutar la consulta
$ejecutar = mysql_query($sql);
//verificamos la ejecucion
if(!$ejecutar){
    echo "Hubo algun error";
}else{
    echo"Datos Guardados correctamente<br><a href='Register.html'>Volver</a>";
}
                        

?>