<!doctype html>
<html>
    <head>
        <title>Crud customer</title>
    <link rel="shortcut icon" href="#" />
    <meta charset="utf-8">
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
        <h2 class="text-center text-dark"><span class="badge badge-success">Tabla de Customers</span></h2>
    </header>    
    
     <div id="Customers">               
        <div class="container">                
            <div class="row">       
                <div class="col">        
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                </div>
                    
            </div>                
            <div class="row mt-5">
                <div class="col-lg-12">                    
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>CustomerID</th>                                    
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
                                <th>Accion</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr v-for="(customers,indice) of customers">                                
                                <td>{{customers.CustomerID}}</td>                                
                                <td>{{customers.CompanyName}}</td>
                                <td>{{customers.ContactName}}</td>
                                <td>{{customers.ContactTitle}}</td>
                                <td>{{customers.Address}}</td>
                                <td>{{customers.City}}</td>                               
                                <td>{{customers.Region}}</td>
                                <td>{{customers.PostalCode}}</td>
                                <td>{{customers.Country}}</td>
                                <td>{{customers.Phone}}</td>
                                <td>{{customers.Fax}}</td>
                                <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(customers.CustomerID, customers.CompanyName, customers.ContactName, customers.ContactTitle, customers.Address, customers.City, customers.Region, customers.PostalCode, customers.Country, customers.Phone, customers.Fax)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(customers.CustomerID)"><i class="fas fa-trash-alt"></i></button>      
								</div>
                                </td>
                            </tr>    
                        </tbody>
                    </table>                    
                </div>
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
    <script src="../Proyecto-German-/js/maincustom.js"></script>      
    
    </body>
</html>