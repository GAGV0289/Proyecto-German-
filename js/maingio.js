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
        const {value: formValues} = await Swal.fire({
        title: 'NUEVO',
        html:
        '<div class="row"><label class="col-sm-3 col-form-label">ProductID</label><div class="col-sm-7"><input id="ProductID" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">ProductName</label><div class="col-sm-7"><input id="ProductName" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">SupplierID</label><div class="col-sm-7"><input id="SupplierID" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CategoryID</label><div class="col-sm-7"><input id="CategoryID" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">QuantityPerUnit</label><div class="col-sm-7"><input id="QuantityPerUnit" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">UnitPrice</label><div class="col-sm-7"><input id="UnitPrice" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">UnitsInStock</label><div class="col-sm-7"><input id="UnitsInStock" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">UnitsOnOrder</label><div class="col-sm-7"><input id="UnitsOnOrder" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">ReorderLevel</label><div class="col-sm-7"><input id="ReorderLevel" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Discontinued</label><div class="col-sm-7"><input id="Discontinued" type="text" class="form-control"></div></div>',
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Guardar',          
        confirmButtonColor:'#1cc88a',          
        cancelButtonColor:'#3085d6',  
        preConfirm: () => {            
            return [
             this.ProductID = document.getElementById('ProductID').value,
             this.ProductName = document.getElementById('ProductName').value,
             this.SupplierID = document.getElementById('SupplierID').value,
             this.CategoryID = document.getElementById('CategoryID').value,
             this.QuantityPerUnit = document.getElementById('QuantityPerUnit').value,  
             this.UnitPrice = document.getElementById('UnitPrice').value,
             this.UnitsInStock = document.getElementById('UnitsInStock').value,
             this.UnitsOnOrder = document.getElementById('UnitsOnOrder').value,
             this.ReorderLevel = document.getElementById('ReorderLevel').value,  
             this.Discontinued = document.getElementById('Discontinued').value,               
            ]
          }
        })        
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
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">ProductID</label><div class="col-sm-7"><input id="ProductID" value="'+ProductID+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">ProductName</label><div class="col-sm-7"><input id="ProductName" value="'+ProductName+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">SupplierID</label><div class="col-sm-7"><input id="SupplierID" value="'+SupplierID+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label" style="font-size: 16.5px;"">CategoryID</label><div class="col-sm-7"><input id="CategoryID" value="'+CategoryID+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">QuantityPerUnit</label><div class="col-sm-7"><input id="QuantityPerUnit" value="'+QuantityPerUnit+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">UnitPrice</label><div class="col-sm-7"><input id="UnitPrice" value="'+UnitPrice+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">UnitsInStock</label><div class="col-sm-7"><input id="UnitsInStock" value="'+UnitsInStock+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">UnitsOnOrder</label><div class="col-sm-7"><input id="UnitsOnOrder" value="'+UnitsOnOrder+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">ReorderLevel</label><div class="col-sm-7"><input id="ReorderLevel" value="'+ReorderLevel+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Discontinued</label><div class="col-sm-7"><input id="Discontinued" value="'+Discontinued+'" type="text" class="form-control"></div></div></div>',
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            ProductID = document.getElementById('ProductID').value,
            ProductName = document.getElementById('ProductName').value,
            SupplierID = document.getElementById('SupplierID').value,
            CategoryID = document.getElementById('CategoryID').value,
            QuantityPerUnit = document.getElementById('QuantityPerUnit').value,
            UnitPrice = document.getElementById('UnitPrice').value,
            UnitsInStock = document.getElementById('UnitsInStock').value,
            UnitsOnOrder = document.getElementById('UnitsOnOrder').value,
            ReorderLevel = document.getElementById('ReorderLevel').value,
            Discontinued = document.getElementById('Discontinued').value,                    
            
            this.editarProductos(ProductID, ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued);
           Swal.fire({
              icon: 'success',
                title: '¡Actualizado!',
                html: 'El registro ha sido actualizado',
                confirmButtonText:'De acuerdo',
                padding: '1rem',
                backdrop: false,
                allowOutsideClick: false,
                allowEnterKey: true,
                confirmButtonColor:'rgb(0, 250, 154, 0.5)'
            });                
          }
        });
        
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