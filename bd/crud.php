<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
<<<<<<< HEAD
$CategoryID = (isset($_POST['Categoryid'])) ? $_POST['Categoryid'] : '';
$CatergoryName = (isset($_POST['CategoryName'])) ? $_POST['CategoryName'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO categories (CategoryName) VALUES('$CategoryName') ";	
=======
$CategoryID = (isset($_POST['CategoryID'])) ? $_POST['CategoryID'] : '';
$CatergoryName = (isset($_POST['CategoryName'])) ? $_POST['CategoryName'] : '';
$Description=(isset($_POST['Description'])) ? $_POST['Description'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO categories (CategoryName,Description) VALUES('$CategoryName','$Description') ";	
>>>>>>> 854ec2b3df6fdb9585021b80e6bb52234580a80b
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2:
<<<<<<< HEAD
        $consulta = "UPDATE categories SET CategoryName='$CategoryName' WHERE CategoryID='$CategoryID' ";		
=======
        $consulta = "UPDATE categories SET CategoryName='$CategoryName', Description='$Description' WHERE CategoryID='$CategoryID' ";		
>>>>>>> 854ec2b3df6fdb9585021b80e6bb52234580a80b
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3:
        $consulta = "DELETE FROM categories WHERE CategoryID='$CaregotyID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4:
<<<<<<< HEAD
        $consulta = "SELECT CategoryID, CategoryName FROM categories";
=======
        $consulta = "SELECT CategoryID, CategoryName, Description FROM categories";
>>>>>>> 854ec2b3df6fdb9585021b80e6bb52234580a80b
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;