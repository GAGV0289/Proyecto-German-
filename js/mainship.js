var url = "../Proyecto-German-/crudship.php";

var Cargadores = new Vue({    
el: "#Cargadores",   
data:{     
     cargadores:[],
     ShipperID:"",
     CompanyName:"",
     Phone:"",              
 },    
methods:{     
     btnNuevo:async function(){                    
        const {value: formValues} = await Swal.fire({
        title: 'NUEVO',
        html:
       '<div class="row"><label class="col-sm-3 col-form-label">ShipperID</label><div class="col-sm-7"><input id="ShipperID" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Phone</label><div class="col-sm-7"><input id="Phone" type="text" class="form-control"></div></div>',
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Agregar',          
        confirmButtonColor:'#1cc88a',          
        cancelButtonColor:'#3085d6',  
        preConfirm: () => {            
            return [
             this.ShipperID = document.getElementById('ShipperID').value,
             this.CompanyName = document.getElementById('CompanyName').value,
             this.Phone = document.getElementById('Phone').value,         
            ]
          }
        })        
        if(this.ShipperID == "" || this.CompanyName == "" || this.Phone == ""){
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
          this.altaCargado();          
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
     btnEditar:async function(ShipperID,CompanyName,Phone)
     {                            
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">ShipperID</label><div class="col-sm-7"><input id="ShipperID" value="'+ShipperID+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" value="'+CompanyName+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Phone</label><div class="col-sm-7"><input id="Phone" value="'+Phone+'" type="text" class="form-control"></div></div></div>',
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            ShipperID = document.getElementById('ShipperID').value,
            CompanyName = document.getElementById('CompanyName').value,
            Phone = document.getElementById('Phone').value,        
            this.editarCargado(ShipperID,CompanyName,Phone);
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
    btnBorrar:function(ShipperID){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+ShipperID+" ?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarCargado(ShipperID);             
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
    Crud:function(){
        axios.post(url, {opcion:4}).then(response =>{
           this.cargadores = response.data;       
        });
    },  
    altaCargado:function(){
        axios.post(url, {opcion:1, ShipperID:this.ShipperID, CompanyName:this.CompanyName, Phone:this.Phone }).then(response =>{
            this.Crud();
        });        
         this.ShipperID = "",
         this.CompanyName = "",
         this.Phone = ""
    },               
    editarCargado:function(ShipperID,CompanyName,Phone){       
       axios.post(url, {opcion:2, ShipperID:ShipperID, CompanyName:CompanyName, Phone:Phone }).then(response =>{           
           this.Crud();           
        });                              
    },    
    borrarCargado:function(ShipperID){
        axios.post(url, {opcion:3, ShipperID:ShipperID}).then(response =>{           
            this.Crud();
            });
    }                            
},      
created: function()
{            
   this.Crud();            
}

});