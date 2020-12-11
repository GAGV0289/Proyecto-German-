var url = "../Proyecto-German-/crudgio.php";

var Productos = new Vue({    
el: "#Productos",   
data:{     
     moviles:[],
     ProductID:"",
     ProductName:"",
     SupplierID:"",
     CategoryID:"",
     QuantityPerUnit:"",
     UnitPrice:"",
     UnitsInStock:"",
     UnitsOnOrder:"",
     ReorderLevel:"",
     Discontinued :"",              
 },    
methods:{     
     btnNuevo:async function(){                    
               
        if(this.ProductID == "" || this.ProductName == "" || this.SupplierID == "" || this.CategoryID == "" || this.QuantityPerUnit == "" || this.UnitPrice == "" || this.UnitsInStock == "" || this.UnitsOnOrder == "" || this.ReorderLevel == "" || this.Discontinued == ""){
                Swal.fire({
                  icon: 'info',
                  title: 'Datos incompletos',                                    
                  html: 'Verificalo',
                  confirmButtonText:'De acuerdo',
                  padding: '1rem',
                  backdrop: false,
                  allowOutsideClick: false,
                  allowEnterKey: true,
                  confirmButtonColor:'rgb(0, 250, 154, 0.5)'
                });
        }       
        else{          
          this.altaProductos();          
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
            });
            Toast.fire({
                icon: 'success',
                title: '¡Producto Agregado!',
                confirmButtonText:'De acuerdo',
                padding: '1rem',
                backdrop: false,
                timer: 2000,
                timerProgressBar: true,
                allowOutsideClick: false,
            })                
        }
    },
     btnEditar:async function(ProductID, ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued)
     {                            
       
        
    },        
    btnBorrar:function(ProductID){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+ProductID+" ?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarProductos(ProductID);             
            Swal.fire({
              icon: 'success',
                title: '¡Eliminado!',
                html: 'El registro a sido borrado',
                confirmButtonText:'De acuerdo',
                padding: '1rem',
                backdrop: false,
                allowOutsideClick: false,
                allowEnterKey: true,
                confirmButtonColor:'rgb(0, 250, 154, 0.5)'
            });           
          }
        })                
    },             
    diferente:function(){
        axios.post(url, {opcion:4}).then(response =>{
           this.moviles = response.data;       
        });
    },  
    altaProductos:function(){
        axios.post(url, {opcion:1, ProductID:this.ProductID, ProductName:this.ProductName, SupplierID:this.SupplierID, CategoryID:this.CategoryID, QuantityPerUnit:this.QuantityPerUnit, UnitPrice:this.UnitPrice, UnitsInStock:this.UnitsInStock, UnitsOnOrder:this.UnitsOnOrder, ReorderLevel:this.ReorderLevel, Discontinued:this.Discontinued }).then(response =>{
            this.diferente();
        });        
         this.ProductID = "",
         this.ProductName = "",
         this.SupplierID = "",
         this.CategoryID = "",
         this.QuantityPerUnit = "",
         this.UnitPrice = "",
         this.UnitsInStock = "",
         this.UnitsOnOrder = "",
         this.ReorderLevel = "",
         this.Discontinued = ""
    },               
    editarProductos:function(ProductID, ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued){       
       axios.post(url, {opcion:2, ProductID:ProductID, ProductName:ProductName, SupplierID:SupplierID, CategoryID:CategoryID, QuantityPerUnit:QuantityPerUnit, UnitPrice:UnitPrice, UnitsInStock:UnitsInStock, UnitsOnOrder:UnitsOnOrder, ReorderLevel:ReorderLevel, Discontinued:Discontinued }).then(response =>{           
           this.diferente();           
        });                              
    },    
    borrarProductos:function(ProductID){
        axios.post(url, {opcion:3, ProductID:ProductID}).then(response =>{           
            this.diferente();
            });
    }                            
},      
created: function()
{            
   this.diferente();            
}

});