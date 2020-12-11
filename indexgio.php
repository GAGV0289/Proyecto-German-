<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nwind</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="../Proyecto-German-/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../Proyecto-German-/plugins/sweetalert2/sweetalert2.min.css">        
    <link rel="stylesheet" href="../Proyecto-German-/css/maingio.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    
    <header>
        <h2 class="text-center bg-light text-danger"><span>Tabla de Products</span></h2>
    </header>    
    
     <div id="Productos">               
        <div class="container"> 
         <div class="row">       
                <div class="col">        
                    <button @click="btnNuevo" class="btn btn-danger" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                </div>  
            </div>                                      
            <div class="row mt-5">
                <div class="col-lg-12">                   
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-white text-danger">
                                <th>ProductID</th>                                    
                                <th>ProductName</th>
                                <th>SupplierID</th>
                                <th>CategoryID</th>    
                                <th>QuantityPerUnit</th>
                                <th>UnitPrice</th>
                                <th>UnitsInStock</th>
                                <th>UnitsOnOrder</th>
                                <th>ReorderLevel</th>
                                <th>Discontinued</th>
                                <th>Operacion</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr class="bg-white" v-for="(movil,indice) of moviles">                                
                               <td>{{movil.ProductID}}</td>                                
                                <td>{{movil.ProductName}}</td>
                                <td>{{movil.SupplierID}}</td>
                                <td>{{movil.CategoryID}}</td>
                                <td>{{movil.QuantityPerUnit}}</td>
                                <td>{{movil.UnitPrice}}</td>
                                <td>{{movil.UnitsInStock}}</td>
                                <td>{{movil.UnitsOnOrder}}</td>
                                <td>{{movil.ReorderLevel}}</td>
                                <td>{{movil.Discontinued}}</td>
                                 <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success" title="Editar" @click="btnEditar(movil.ProductID,movil.ProductName,movil.SupplierID,movil.CategoryID,movil.QuantityPerUnit,movil.UnitPrice,movil.UnitsInStock,movil.UnitsOnOrder,movil.ReorderLevel,movil.Discontinued)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.ProductID)"><i class="fas fa-trash-alt"></i></button>      
                                </div>
                                </td>

                            </tr>    
                        </tbody>
                    </table>                     
                </div>
            </div>
        </div>        
    </center>
    </div>        
          </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../Proyecto-German-/popper/popper.min.js"></script>
<script src="../Proyecto-German-/bootstrap/js/bootstrap.min.js"></script>           
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>                
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>         
<script src="../Proyecto-German-/plugins/sweetalert2/sweetalert2.all.min.js"></script>              
<script src="../Proyecto-German-/js/maingio.js"></script>
</body>
</html>