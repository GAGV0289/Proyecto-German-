var url = "bd/crud.php";

var appCategories = new Vue({    
el: "#appCategories",   
data:{     
     categories:[],    
     CategoryID:"",
     CategoryName:"",
     Description:"",
           
 },    
methods:{  
    //BOTONES        
    btnAlta:async function(){                    
        const {value: formValues} = await Swal.fire({
        title: 'NUEVO',
        html:
        '<div class="row"><label class="col-sm-3 col-form-label">CategoryName</label><div class="col-sm-7"><input id="CategoryName" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Description</label><div class="col-sm-7"><input id="Description" type="text" class="form-control"></div></div>',              
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Guardar',          
        confirmButtonColor:'#1cc88a',          
        cancelButtonColor:'#3085d6',  
        preConfirm: () => {            
            return [
              this.CategoryName = document.getElementById('CategoryName').value,
              this.Description = document.getElementById('Description').value,
                                
            ]
          }
        })        
        if(this.CategoryName== "" || this.Description == "" ){
                Swal.fire({
                  type: 'info',
                  title: 'Datos incompletos',                                    
                }) 
        }       
        else{          
          this.altaCategory();          
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            Toast.fire({
              type: 'success',
              title: '¡Producto Agregado!'
            })                
        }
    },           
    btnEditar:async function(CategoryID, CategoryName, Description){                            
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">CategoryName</label><div class="col-sm-7"><input id="CategoryName" value="'+CategoryName+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Description</label><div class="col-sm-7"><input id="Description" value="'+Description+'" type="text" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            CategoryName = document.getElementById('CategoryName').value,    
            Description = document.getElementById('Description').value,
                                
            
            this.editarCategory(CategoryID,CategoryName,Description);
            Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'
            )                  
          }
        });
        
    },        
    btnBorrar:function(CategoryID){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+CategoryID+" ?",         
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarCategory(CategoryID);             
            //y mostramos un msj sobre la eliminación  
            Swal.fire(
              '¡Eliminado!',
              'El registro ha sido borrado.',
              'success'
            )
          }
        })                
    },       
    
    //PROCEDIMIENTOS para el CRUD     
    listarCategories:function(){
        axios.post(url, {opcion:4}).then(response =>{
           this.categories = response.data;       
        });
    },    
    //Procedimiento CREAR.
    altaCategory:function(){
        axios.post(url, {opcion:1, CategoryName:this.CategoryName, Description:this.Description }).then(response =>{
            this.listarCategories();
        });        
         this.CategoryName = "",
         this.Description = ""
         
    },               
    //Procedimiento EDITAR.
    editarCategory:function(CategoryID,CategoryName,Description){       
       axios.post(url, {opcion:2, CategoryID:CategoryID, CategoryName:CategoryName, Description:Description }).then(response =>{           
           this.listarCategories();           
        });                              
    },    
    //Procedimiento BORRAR.
    borrarCategory:function(CategoryID){
        axios.post(url, {opcion:3, CategoryID:CategoryID}).then(response =>{           
            this.listarCategories();
            });
    }             
},      
created: function(){            
   this.listarCategories();            
},    

});