<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nwind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="../Proyecto-German-/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../Proyecto-German-/plugins/sweetalert2/sweetalert2.min.css">   
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    
    <header>
        <h2 class="text-center bg-light text-danger"><span>Proveedores</span></h2>
    </header>    
    
     <div id="Proveedores">               
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
                                <th>SupplierID</th>                                    
                                <th>CompanyName</th>
                                <th>ContactName</th>
                                <th>ContactTitle</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Region</th>
                                <th>PostalCode</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>HomePage</th>
                                <th>Accion</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr class="bg-white" v-for="(shipes,indice) of ships">                                
                               <td>{{shipes.SupplierID}}</td>                                
                                <td>{{shipes.CompanyName}}</td>
                                <td>{{shipes.ContactName}}</td>
                                <td>{{shipes.ContactTitle}}</td>
                                <td>{{shipes.Address}}</td>
                                <td>{{shipes.City}}</td>
                                <td>{{shipes.Region}}</td>
                                <td>{{shipes.PostalCode}}</td>
                                <td>{{shipes.Country}}</td>
                                <td>{{shipes.Phone}}</td>
                                <td>{{shipes.Fax}}</td>
                                <td>{{shipes.HomePage}}</td>
                                 <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success" title="Editar" @click="btnEditar(shipes.ShipperID,shipes.CompanyName,shipes.ContactName,shipes.ContactTitle, shipes.Address,shipes.City,shipes.Region,shipes.PostalCode,shipes.Country,shipes.Phone,shipes.Fax,shipes.HomePage)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(shipes.SupplierID)"><i class="fas fa-trash-alt"></i></button>      
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
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>         
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>            
    <!--Axios -->      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>    
    <!--Sweet Alert 2 -->        
    <script src="../Proyecto-German-/plugins/sweetalert2/sweetalert2.all.min.js"></script>    
    <!--Código custom -->          
    <script src="js/mainsup.js"></script>  
</body>
</html>