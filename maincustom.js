var url = "bd/crudcustom.php";

var Customers = new Vue({    
el: "#Customers",   
data:{     
     customers:[],          
     CustomerID:"",
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
    
          
 },    
methods:{  
    //BOTONES        
    btnAlta:async function(){                    
        const {value: formValues} = await Swal.fire({
        title: 'NUEVO',
        html:
        '<div class="row"><label class="col-sm-3 col-form-label">CustomerID</label><div class="col-sm-7"><input id="CustomerID" type="text" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" type="text" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">ContactName</label><div class="col-sm-7"><input id="ContactName" type="text" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">ContactTitle</label><div class="col-sm-7"><input id="ContactTitle" type="text" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">Address</label><div class="col-sm-7"><input id="Address" type="text" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">City</label><div class="col-sm-7"><input id="City" type="text" class="form-control"></div></div>    <div class="row"><label class="col-sm-3 col-form-label">Region</label><div class="col-sm-7"><input id="Region" type="text" class="form-control"></div></div>  <div class="row"><label class="col-sm-3 col-form-label">PostalCode</label><div class="col-sm-7"><input id="PostalCode" type="text" class="form-control"></div></div>  <div class="row"><label class="col-sm-3 col-form-label">Country</label><div class="col-sm-7"><input id="Country" type="text" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">Phone</label><div class="col-sm-7"><input id="Phone" type="text" class="form-control"></div></div>   <div class="row"><label class="col-sm-3 col-form-label">Fax</label><div class="col-sm-7"><input id="Fax" type="text" class="form-control"></div></div> ',              
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Guardar',          
        confirmButtonColor:'#1cc88a',          
        cancelButtonColor:'#3085d6',  
        preConfirm: () => {            
            return [
              this.CustomerID = document.getElementById('CustomerID').value, 
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
              
            ]
          }
        })        
        if(this.CustomerID == ""||this.CompanyName==""||this.ContactName==""||this.ContactTitle==""||this.Address==""||this.City==""||this.Region==""||this.PostalCode==""||this.Country==""||this.Phone==""||this.Fax=="" ){
                Swal.fire({
                  type: 'info',
                  title: 'Datos incompletos',                                    
                }) 
        }       
        else{          
          this.altaCustom();          
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
    btnEditar:async function(CustomerID, CompanyName,ContactName,ContactTitle,Address,City,Region,PostalCode,Country,Phone,Fax){                            
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">CustomerID</label><div class="col-sm-7"><input id="CustomerID" value="'+CustomerID+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">CompanyName</label><div class="col-sm-7"><input id="CompanyName" value="'+CompanyName+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">ContactName</label><div class="col-sm-7"><input id="ContactName" value="'+ContactName+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">ContactTitle</label><div class="col-sm-7"><input id="ContactTitle" value="'+ContactTitle+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Address</label><div class="col-sm-7"><input id="Address" value="'+Address+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">City</label><div class="col-sm-7"><input id="City" value="'+City+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Region</label><div class="col-sm-7"><input id="Region" value="'+Region+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">PostalCode</label><div class="col-sm-7"><input id="PostalCode" value="'+PostalCode+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Country</label><div class="col-sm-7"><input id="Country" value="'+Country+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Phone</label><div class="col-sm-7"><input id="Phone" value="'+Phone+'" type="text" class="form-control"></div></div></div><div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Fax</label><div class="col-sm-7"><input id="Fax" value="'+Fax+'" type="text" class="form-control"></div></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            CustomerID= document.getElementById('CustomerID').value,
            CompanyName = document.getElementById('CompanyName').value,   
            ContactName = document.getElementById('ContactName').value,   
            ContactTitle= document.getElementById('ContactTitle').value,   
            Address = document.getElementById('Address').value,   
            City = document.getElementById('City').value,   
            Region= document.getElementById('Region').value,   
            PostalCode = document.getElementById('PostalCode').value,   
            Country = document.getElementById('Country').value,   
            Phone = document.getElementById('Phone').value,    
            Fax = document.getElementById('Fax').value,     
                              
            
            this.editarCustom(CustomerID, CompanyName,ContactName,ContactTitle,Address,City,Region,PostalCode,Country,Phone,Fax);
            Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'
            )                  
          }
        });
        
    },        
    btnBorrar:function(CustomerID){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+CustomerID+" ?",         
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarCategory(CustomerID);             
            
            Swal.fire(
              '¡Eliminado!',
              'El registro ha sido borrado.',
              'success'
            )
          }
        })                
    },       
    
    //PROCEDIMIENTOS para el CRUD     
    listarCustomers:function(){
        axios.post(url, {opcion:4}).then(response =>{
           this.customers = response.data;       
        });
    },    
    //Procedimiento CREAR.
    altaCustomers:function(){
        axios.post(url, {opcion:1, CustomerID:this.CustomerID,CompanyName:this.CompanyName,ContactName:this.ContactName,ContactTitle:this.ContactTitle,Address:this.Address,City:this.City,Region:this.Region,PostalCode:this.PostalCode,Country:this.Country,Phone:this.Phone,Fax:this.Fax }).then(response =>{
            this.listarCustomers();
        });        
         
         this.CustomerID = "",
         this.CompanyName="",
         this.ContactName="",
         this.ContactTitle="",
         this.Address="",
         this.City="",
         this.Region="",
         this.PostalCode="",
         this.Country="",
         this.Phone="",
         this.Fax="" 
         
    },               
    //Procedimiento EDITAR.
    editarCustomers:function(CustomerID, CompanyName,ContactName,ContactTitle,Address,City,Region,PostalCode,Country,Phone,Fax){       
       axios.post(url, {opcion:2, CustomerID:CustomerID, CompanyName:CompanyName,ContactName:ContactName, ContactTitle:ContactTitle, Address:Address,City:City, Region:Region, PostalCode:PostalCode, Country:Country, Phone:Phone, Fax:Fax }).then(response =>{           
           this.listarCustomers();           
        });                              
    },    
    //Procedimiento BORRAR.
    borrarCategory:function(CustomerID){
        axios.post(url, {opcion:3, CustomerID:CustomerID}).then(response =>{           
            this.listarCustomers();
            });
    }             
},      
created: function(){            
   this.listarCustomers();            
},    

});