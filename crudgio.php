<?php
include_once '../Proyecto-German-/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$ProductID = (isset($_POST['ProductID'])) ? $_POST['ProductID'] : '';
$ProductName = (isset($_POST['ProductName'])) ? $_POST['ProductName'] : '';
$SupplierID = (isset($_POST['SupplierID'])) ? $_POST['SupplierID'] : '';
$CategoryID = (isset($_POST['CategoryID'])) ? $_POST['CategoryID'] : '';
$QuantityPerUnit = (isset($_POST['QuantityPerUnit'])) ? $_POST['QuantityPerUnit'] : '';
$UnitPrice = (isset($_POST['UnitPrice'])) ? $_POST['UnitPrice'] : '';
$UnitsInStock = (isset($_POST['UnitsInStock'])) ? $_POST['UnitsInStock'] : '';
$UnitsOnOrder = (isset($_POST['UnitsOnOrder'])) ? $_POST['UnitsOnOrder'] : '';
$ReorderLevel = (isset($_POST['ReorderLevel'])) ? $_POST['ReorderLevel'] : '';
$Discontinued = (isset($_POST['Discontinued'])) ? $_POST['Discontinued'] : '';
switch($opcion)
{
	case 1:
        $consulta = "INSERT INTO products (ProductID, ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued) 
        VALUES('$ProductID', '$ProductName', '$SupplierID', '$CategoryID', '$QuantityPerUnit', '$UnitPrice', '$UnitsInStock', '$UnitsOnOrder', '$ReorderLevel', '$Discontinued') ";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2:
        $consulta = "UPDATE products SET ProductName='$ProductName', SupplierID='$SupplierID', CategoryID='$CategoryID', QuantityPerUnit='$QuantityPerUnit', UnitPrice='$UnitPrice', UnitsInStock='$UnitsInStock', UnitsOnOrder='$UnitsOnOrder', ReorderLevel='$ReorderLevel', Discontinued='$Discontinued' WHERE ProductID='$ProductID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3:
        $consulta = "DELETE FROM products WHERE ProductID='$ProductID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4:
        $consulta = "SELECT ProductID, ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued FROM products";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;