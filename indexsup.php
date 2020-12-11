<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nwind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontAwesom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">        
    <!--Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <!--CSS custom -->  
</head>
<body>
    
    <header>
        <h2 class="text-center bg-light text-danger"><span>Proveedores</span></h2>
    </header>    
    
     <div id="Proveedores">               
        <div class="container"> 
         <div class="row">       
                <div class="col">        
                    <button @click="btnNuevo" class="btn btn-danger" title="Nuevo"><i calss="fas fa-plus-circle fa-2x"></i></button>
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
                            </tr>    
                        </thead>
                        <tbody>
                            <tr class="bg-white" v-for="(ships,indice) of ships">                                
                               <td>{{ships.SupplierID}}</td>                                
                                <td>{{ships.CompanyName}}</td>
                                <td>{{ships.ContactName}}</td>
                                <td>{{ships.Address}}</td>
                                <td>{{ships.City}}</td>
                                <td>{{ships.Region}}</td>
                                <td>{{ships.PostalCode}}</td>
                                <td>{{ships.Country}}</td>
                                <td>{{ships.Phone}}</td>
                                <td>{{ships.Fax}}</td>
                                <td>{{ships.HomePage}}</td>
                                 <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success" title="Editar" @click="btnEditar(ships.ShipperID,ships.CompanyName,ships.ContactName,ships.Address,ships.City,ships.Region,ships.PostalCode,ships.Country,ships.Phone,ships.Fax,ships.HomePage"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(ships.SupplierID)"><i class="fas fa-trash-alt"></i></button>      
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
    <!--Vue.JS -->    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>              
    <!--Axios -->      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>    
    <!--Sweet Alert 2 -->        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>      
    <!--Código custom -->          
    <script src="mainsup.js"></script>  
</body>
</html>