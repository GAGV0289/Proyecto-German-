<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
?>

<html lang="es">
	<head> 
		<title>Reporte 2</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="../css/estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
			<h1 class="reporte1">REPORTE 2</h1>
		<section>
				<form class="form-inline"  method="POST" name="formFechas" id="formFechas">
			            
			            <input type="number" min="1996" max="1998" class="Valor1" name="n1" placeholder="AÑO" onkeypress="return nada(event)" required>
			            <input type="number" min="1" max="12" class="Valor1" name="n2" placeholder="MES" onkeypress="return nada(event)" required>
			            <input type="number" min="1" max="31" class="Valor1" name="n3" placeholder="DÍA" onkeypress="return nada(event)" required>
			            <br>
			            <p class="parrafo">HASTA</p>
			            
			            <input type="number" min="1996" max="1998" class="Valor1" name="n4" placeholder="AÑO" onkeypress="return nada(event)" required>
			            <input type="number" min="1" max="12" class="Valor1" name="n5" placeholder="MES" onkeypress="return nada(event)" required>
			            <input type="number" min="1" max="31" class="Valor1" name="n6" placeholder="DÍA" onkeypress="return nada(event)" required>
			      		<br>
			            <button type="submit" id="submit" class="btn btn-primary">Buscar</button>
				</form><br>
			<table class="col-md-12">
				<tr class="bg-primary">
					<th class="pad-basic">productid</th>
					<th class="pad-basic">productname</th>
					<th class="pad-basic">unitprice</th>
					<th class="pad-basic">unitsinstock</th>
					<th class="pad-basic">CategoryName</th>
					<th class="pad-basic">Cantidad</th>
					<th class="pad-basic">Monto</th>
				<tr>

				<?php

				$Valor1 =  (isset($_POST['n1'])) ? $_POST['n1'] : '';
				$Valor2 =  (isset($_POST['n2'])) ? $_POST['n2'] : '';
				$Valor3 =  (isset($_POST['n3'])) ? $_POST['n3'] : '';
				$Valor4 =  (isset($_POST['n4'])) ? $_POST['n4'] : '';
				$Valor5 =  (isset($_POST['n5'])) ? $_POST['n5'] : '';
				$Valor6 =  (isset($_POST['n6'])) ? $_POST['n6'] : '';

				$query="SELECT p.productid, p.productname, p.unitprice, p.unitsinstock, c.CategoryName,
						(
							SELECT count(*) FROM `order details` od join orders o on o.OrderID=od.orderid
						    where p.ProductID=od.productID
						    and o.OrderDate between '$Valor1.$Valor2.$Valor3' and '$Valor4.$Valor5.$Valor6'
						) Cantidad ,
						(
							SELECT round(sum(od.unitprice*od.Quantity-od.unitprice*od.Quantity*od.Discount), 2)
						    FROM  `order details` od join orders o on o.OrderID=od.orderid
						    where p.ProductID=od.productID
						    and o.OrderDate between '$Valor1.$Valor2.$Valor3' and '$Valor4.$Valor5.$Valor6'
						) as Monto
						FROM products p join categories c on p.CategoryID=c.CategoryID
						where c.CategoryID=7
						order by cantidad desc";

				$consulta=$conexion->query($query);
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{
						echo'
						<tr>
						<td>'.$fila['productid'].'</td>
						<td>'.$fila['productname'].'</td>
						<td>'.$fila['unitprice'].'</td>
						<td>'.$fila['unitsinstock'].'</td>
						<td>'.$fila['CategoryName'].'</td>
						<td>'.$fila['Cantidad'].'</td>
						<td>'.$fila['Monto'].'</td>
						</tr>
						';
					}


				?>

			</table>
		</section>

		<script type="text/javascript">
			
			function nada(e)
			{
				key=e.keyCode || e.which;
				teclado=String.fromCharCode(key).toLowerCase();
				letras="";
				especiales="8-37-38-46-164";
				teclado_especial=false;

				for(var i in especiales)
				{
					if(key==especiales[i])
					{
						teclado_especial=true;break;
					}
				}
				if(letras.indexOf(teclado)==-1 && !teclado_especial)
				{
					return false;
				}
			}
		</script>
</body>
</html>