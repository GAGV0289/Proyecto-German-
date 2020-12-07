<?php
include_once '../Proyecto-German-/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$ShipperID = (isset($_POST['ShipperID'])) ? $_POST['ShipperID'] : '';
$CompanyName = (isset($_POST['CompanyName'])) ? $_POST['CompanyName'] : '';
$Phone = (isset($_POST['Phone'])) ? $_POST['Phone'] : '';
switch($opcion)
{
	case 1:
        $consulta = "INSERT INTO shippers (ShipperID, CompanyName, Phone) VALUES('$ShipperID', '$CompanyName', '$Phone') ";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2:
        $consulta = "UPDATE shippers SET CompanyName='$CompanyName', Phone='$Phone' WHERE ShipperID='$ShipperID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3:
        $consulta = "DELETE FROM shippers WHERE ShipperID='$ShipperID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4:
        $consulta = "SELECT ShipperID, CompanyName, Phone FROM shippers";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;