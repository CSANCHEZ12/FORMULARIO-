<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'conexion.php';

mysqli_set_charset($conn, "UTF8");

$id_personas=$_POST['id_personas'];
$tipo=$_POST['tipo'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$cumple=$_POST['cumple'];
$estrato=$_POST['estrato'];
$barrio=$_POST['barrio'];
$sexo=$_POST['sexo'];
$departamento=$_POST['departamento'];
$municipio=$_POST['municipio'];
$direccion=$_POST['direccion'];
$lider=$_POST['lider'];
$sitio=$_POST['sitio'];
$mesa=$_POST['mesa'];
$telefono=$_POST['telefono'];
$tratamiento=$_POST['tratamiento'];

$consulta=$conn->query("SELECT * FROM persona WHERE id_personas='$id_personas' OR cedula='$cedula' or email='$email'");

if ($consulta->num_rows == 0) {
    
    $sql = "INSERT INTO persona (id_personas, tipo, cedula, nombre, apellido, email, cumple, estrato, barrio, sexo, departamento, municipio, direccion, lider, sitio, mesa, telefono, tratamiento) 
            VALUES ('$id_personas', '$tipo', '$cedula', '$nombre', '$apellido', '$email', '$cumple', '$estrato', '$barrio', '$sexo', '$departamento', '$municipio', '$direccion', '$lider', '$sitio', '$mesa', '$telefono', '$tratamiento')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Datos fueron Guardados";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Datos No guardados, email o cedula ya registradas";
}

$conn->close();
?>



