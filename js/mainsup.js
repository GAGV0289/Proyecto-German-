var url = "../Proyecto-German-/crudsup.php";

var Proveedores = new Vue({    
el: "#Proveedores",   
data:{     
     proveedores:[],
     SupplierID:"",
     CompanyName:"",
     ContactName:"",
     ContactTitle:"",
     Address:"",
     City:"",
     Region:"",
     PostalCode:"",
     Country:"",
     Phone:"",
     Fax:"",
     HomePage:"",

 },    
methods:{     
     btnNuevo:async function(){                    
        const {value: formValues} = await Swal.fire({
        title: 'NUEVO',
        html:
        '<div class="row"><label class="col-sm-3 col-form-label">SupplierID</label><div class="col-sm-7"><input id="SupplierID" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" type="text" class="form-control"><div class="row"><label class="col-sm-3 col-form-label">ContactTitle</label><div class="col-sm-7"><input id="ContactTitle" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Address</label><div class="col-sm-7"><input id="Address" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">City</label><div class="col-sm-7"><input id="City" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Region</label><div class="col-sm-7"><input id="Region" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">PostalCode</label><div class="col-sm-7"><input id="PostalCode" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Country</label><div class="col-sm-7"><input id="Country" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Phone</label><div class="col-sm-7"><input id="Phone" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Fax</label><div class="col-sm-7"><input id="Fax" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">HomePage</label><div class="col-sm-7"><input id="HomePage" type="text" class="form-control"></div></div>',
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Guardar',          
        confirmButtonColor:'#b7e5c6',          
        cancelButtonColor:'#e5b8b7',  
        preConfirm: () => {            
            return [
             this.SupplierID = document.getElementById('SupplierID').value,
             this.CompanyName = document.getElementById('CompanyName').value,
             this.ContactName = document.getElementById('ContactName').value,
             this.ContactTitle = document.getElementById('ContactTitle').value,
             this.Address = document.getElementById('Address').value,
             this.City = document.getElementById('City').value,
             this.Region = document.getElementById('Region').value,
             this.PostalCode = document.getElementById('PostalCode').value,
             this.Country = document.getElementById('Country').value,
             this.Phone = document.getElementById('Phone').value,
             this.Fax = document.getElementById('Fax').value,
             this.HomePage = document.getElementById('HomePage').value,          
            ]
          }
        })        
        if(this.SupplierID == "" || this.CompanyName == "" || this.ContactName == ""|| this.ContactTitle == "" || this.Address == "" || this.City == "" || this.Region == "" || this.PostalCode == "" || this.Country == "" || this.Phone == "" || this.Fax == "" || this.HomePage == "" )
        {
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
          this.altaProveedores();          
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
            });
            Toast.fire({
                icon: 'success',
                title: '¡Provedor Agregado!',
                confirmButtonText:'De acuerdo',
                padding: '1rem',
                backdrop: false,
                timer: 2000,
                timerProgressBar: true,
                allowOutsideClick: false,
            })                
        }
    },
     btnEditar:async function(SupplierID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax, HomePage)
     {                            
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">SupplierID</label><div class="col-sm-7"><input id="SupplierID" value="'+SupplierID+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" value="'+CompanyName+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">ContactName</label><div class="col-sm-7"><input id="ContactName" value="'+ContactName+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">ContactTitle</label><div class="col-sm-7"><input id="ContactTitle" value="'+ContactTitle+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Address</label><div class="col-sm-7"><input id="Address" value="'+Address+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">City</label><div class="col-sm-7"><input id="City" value="'+City+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Region</label><div class="col-sm-7"><input id="Region" value="'+Region+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">PostalCode</label><div class="col-sm-7"><input id="PostalCode" value="'+PostalCode+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Phone</label><div class="col-sm-7"><input id="Phone" value="'+Phone+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Fax</label><div class="col-sm-7"><input id="Fax" value="'+Fax+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">HomePage</label><div class="col-sm-7"><input id="HomePage" value="'+HomePage+'" type="text" class="form-control"></div></div>',
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            SupplierID = document.getElementById('SupplierID').value,
            CompanyName = document.getElementById('CompanyName').value,
            ContactName = document.getElementById('ContactName').value,
            ContactTitle = document.getElementById('ContactTitle').value,
            Address = document.getElementById('Address').value,
            City = document.getElementById('City').value,
            Region = document.getElementById('Region').value,
            PostalCode = document.getElementById('PostalCode').value,
            Country = document.getElementById('Country').value,
            Phone = document.getElementById('Phone').value,
            Fax = document.getElementById('Fax').value,
            HomePage = document.getElementById('HomePage').value                
            
            this.editarProveedores(SupplierID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax, HomePage);
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
    btnBorrar:function(SupplierID){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+SupplierID+" ?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarProveedores(SupplierID);             
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
           this.proveedores = response.data;       
        });
    },  
    altaProveedores:function(){
        axios.post(url, {opcion:1, SupplierID:this.SupplierID, CompanyName:this.CompanyName, ContactTitle:this.ContactTitle, Address:this.Address, City:this.City, Region:this.Region, PostalCode:this.PostalCode, Country:this.Country, Phone:this.Phone, Fax:this.Fax, HomePage:this.HomePage}).then(response =>{
            this.diferente();
        });        
         this.SupplierID = "",
         this.CompanyName = "",
         this.ContactName = ""
         this.ContactTitle = "",
         this.Address = "",
         this.City = "",
         this.Region = "",
         this.PostalCode = "",
         this.Country = "",
         this.Phone = "",
         this.Fax = "",
         this.HomePage = ""
    },               
    editarProveedores:function(SupplierID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax, HomePage){       
       axios.post(url, {opcion:2, SupplierID:SupplierID, CompanyName:CompanyName, ContactName:ContactName, ContactTitle:ContactTitle, Address:Address, City:City, Region:Region, PostalCode:PostalCode, Country:Country, Phone:Phone, Fax:Fax, HomePage:HomePage }).then(response =>{           
           this.diferente();           
        });                              
    },    
    borrarProveedores:function(SupplierID){
        axios.post(url, {opcion:3, SupplierID:SupplierID}).then(response =>{           
            this.diferente();
            });
    }                            
},      
created: function()
{            
   this.diferente();            
}

});