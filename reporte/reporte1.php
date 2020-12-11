<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
?>

<html lang="es">
	<head> 
		<title>Reporte 1</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="../css/estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
			<h1 class="reporte1">REPORTE 1</h1>
		<section>
				<form class="form-inline"  method="POST" name="formFechas" id="formFechas">
			            <input type="number" min="1996" max="1998" class="Valor1" name="n1" placeholder="AÑO" onkeypress="return nada(event)" required>
			            <input type="number" min="1" max="12" class="Valor1" name="n2" placeholder="MES" onkeypress="return nada(event)" required>
			      		<br>
			            <button type="submit" id="submit" class="btn btn-primary">Buscar</button>
			            <a href="../index.html" id="submit" class="btn btn-primary">Regresar</a>
				</form><br>
			<table class="col-md-12">
				<tr class="bg-primary">
					<th class="pad-basic">employeeid</th>
					<th class="pad-basic">title</th>
					<th class="pad-basic">Nombre</th>
					<th class="pad-basic">country</th>
					<th class="pad-basic">Ordenes</th>
					<th class="pad-basic">Monto</th>
				<tr>

				<?php

				$Valor1 =  (isset($_POST['n1'])) ? $_POST['n1'] : '';
				$Valor2 =  (isset($_POST['n2'])) ? $_POST['n2'] : '';

				$query="SELECT e.employeeid, e.title, concat(e.firstname,'',e.lastname) as Nombre, e.country,
							(
								SELECT count(*) FROM orders o where o.employeeid=e.employeeid
								and year(o.orderdate)='$Valor1' and month(o.orderdate)='$Valor2'

							) as Ordenes,
							(
								SELECT round( sum(od.quantity*od.unitprice - od.quantity*od.unitprice*od.Discount), 2)
								FROM `order details` od join orders o
								on o.orderid=od.orderid where o.EmployeeID=e.employeeid
								and year(o.orderdate)='$Valor1' and month(o.orderdate)='$Valor2'

							) as Monto
						FROM employees e
						order by Monto desc";

				$consulta=$conexion->query($query);
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{
						echo'
						<tr>
						<td>'.$fila['employeeid'].'</td>
						<td>'.$fila['title'].'</td>
						<td>'.$fila['Nombre'].'</td>
						<td>'.$fila['country'].'</td>
						<td>'.$fila['Ordenes'].'</td>
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