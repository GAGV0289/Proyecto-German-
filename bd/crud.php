<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$CategoryID = (isset($_POST['Categoryid'])) ? $_POST['Categoryid'] : '';
$CatergoryName = (isset($_POST['CategoryName'])) ? $_POST['CategoryName'] : '';

switch($opcion){
    case 1:
        $consulta = "INSERT INTO categories (CategoryName) VALUES('$CategoryName') ";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2:
        $consulta = "UPDATE categories SET CategoryName='$CategoryName' WHERE CategoryID='$CategoryID' ";		
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
        $consulta = "SELECT CategoryID, CategoryName FROM categories";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;