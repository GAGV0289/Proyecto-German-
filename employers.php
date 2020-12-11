<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employeers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="../Proyecto-German-/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../Proyecto-German-/plugins/sweetalert2/sweetalert2.min.css">        
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body style="background-color:#939292;">
    
    <header>
        <h2 class="text-center bg-dark text-white"><span>Tabla de Empleados</span></h2>
    </header>    
    
     <div id="Productos">               
        <div class="container"> 
         <div class="row">       
                <div class="col">        
                    <button @click="btnNuevo" class="btn btn-black" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                </div>  
            </div>                                      
            <div class="row mt-5">
                <div class="col-lg-12">                   
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-white text-black">
                                <th>Employee ID</th>
                                <th>Last name</th>
                                <th>first name</th>
                                <th>title</th>
                                <th>title of Courtesy</th>
                                <th>Birth date</th>
                                <th>Hire Date</th>
                                <th>addres</th>
                                <th>city</th>
                                <th>region</th>
                                <th>postal code</th>
                                <th>country</th>
                                <th>Home phone</th>
                                <th>extencion</th>
                                <th>repots to</th>
                                <th>Configurar</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr class="bg-white" v-for="(movil) of moviles">                                
                               <td>{{movil.EmployeeID}}</td>
                               <td>{{movil.LastName}}</td>
                               <td>{{movil.FirstName}}</td>
                               <td>{{movil.Title}}</td>
                               <td>{{movil.TitleOfCourtesy}}</td>
                               <td>{{movil.BirthDate}}</td> 
                               <td>{{movil.HireDate}}</td> 
                               <td>{{movil.Address}}</td> 
                               <td>{{movil.City}}</td> 
                               <td>{{movil.Region}}</td> 
                               <td>{{movil.PostalCode}}</td> 
                               <td>{{movil.Country}}</td> 
                               <td>{{movil.HomePhone}}</td> 
                               <td>{{movil.Extension}}</td> 
                               <td>{{movil.ReportsTo}}</td>                                
                            
                                 
                                 <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-success" title="Editar" @click="btnEditar(movil.EmployeeID,movil.LastName,movil.FirstName,movil.Title,movil.TitleOfCourtesy,movil.BirthDate,movil.HireDate,movil.Address,movil.City,movil.Region,movil.PostalCode,movil.Country,movil.HomePhone,movil.Extension,movil.ReportsTo)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.EmployeeID)"><i class="fas fa-trash-alt"></i></button>      
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
<script src="../Proyecto-German-/js/mainvgg.js"></script>
</body>
</html>