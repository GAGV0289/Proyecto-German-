<!doctype html>
<html>
    <head>
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
<<<<<<< HEAD
        <h2 class="text-center text-dark"><span class="badge badge-success">CRUD con VUE.JS</span></h2>
=======
        <h2 class="text-center text-dark"><span class="badge badge-success">CRUD de la tabla categories</span></h2>
>>>>>>> 854ec2b3df6fdb9585021b80e6bb52234580a80b
    </header>    
    
     <div id="appCategories">               
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
                                <th>CategoryID</th>                                    
                                <th>CategoryName</th>
<<<<<<< HEAD
=======
                                <th>Description</th>
>>>>>>> 854ec2b3df6fdb9585021b80e6bb52234580a80b
                            </tr>    
                        </thead>
                        <tbody>
                            <tr v-for="(categories,indice) of categories">                                
                                <td>{{categories.CategoryID}}</td>                                
                                <td>{{categories.CategoryName}}</td>
<<<<<<< HEAD
                                
                               
                                <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(categories.CategoryID, categories.CategoryName )"><i class="fas fa-pencil-alt"></i></button>    
=======
                                <td>{{categories.Description}}</td>
                               
                                <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(categories.CategoryID, categories.CategoryName, categories.Description )"><i class="fas fa-pencil-alt"></i></button>    
>>>>>>> 854ec2b3df6fdb9585021b80e6bb52234580a80b
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(categories.CategoryID)"><i class="fas fa-trash-alt"></i></button>      
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
    <script src="mein.js"></script>         
    </body>
</html>