<?php
include_once '../Proyecto-German-/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$SupplierID = (isset($_POST['SupplierID'])) ? $_POST['SupplierID'] : '';
$CompanyName = (isset($_POST['CompanyName'])) ? $_POST['CompanyName'] : '';
$ContactName = (isset($_POST['ContactName'])) ? $_POST['ContactName'] : '';
$ContactTitle = (isset($_POST['ContactTitle'])) ? $_POST['ContactTitle'] : '';
$Address = (isset($_POST['Address'])) ? $_POST['Address'] : '';
$City = (isset($_POST['City'])) ? $_POST['City'] : '';
$Region = (isset($_POST['Region'])) ? $_POST['Region'] : '';
$PostalCode = (isset($_POST['PostalCode'])) ? $_POST['PostalCode'] : '';
$Country = (isset($_POST['Country'])) ? $_POST['Country'] : '';
$Phone = (isset($_POST['Phone'])) ? $_POST['Phone'] : '';
$Fax = (isset($_POST['Fax'])) ? $_POST['Fax'] : '';
$HomePage = (isset($_POST['HomePage'])) ? $_POST['HomePage'] : '';

switch($opcion)
{
	case 1:
        $consulta = "INSERT INTO shippers (SupplierID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax, HomePage) 
        VALUES('$SupplierID', '$CompanyName', '$ContactName', '$ContactTitle', '$Address', '$City', '$Region', '$PostalCode', '$Country', '$Phone', '$Fax', '$HomePage') ";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2:
        $consulta = "UPDATE shippers SET SupplierID='$SupplierID', CompanyName='$CompanyName', ContactName='$ContactName', ContactTitle='$ContactTitle', Address='$Address', City='$City', Region='$Region', PostalCode='$PostalCode', Country='$Country', Phone='$Phone', Fax='$Fax', HomePage='$HomePage' WHERE SupplierID='$SupplierID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3:
        $consulta = "DELETE FROM shippers WHERE SupplierID='$SupplierID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4:
        $consulta = "SELECT SupplierID, CompanyName, Phone FROM shippers";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;