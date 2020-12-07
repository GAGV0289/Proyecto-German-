function validarcita()
{
  var usuario2 = document.getElementById("usuario").value;
  var password2 = document.getElementById("password").value;
  
    if(usuario2.length<5)
    {
       Swal.fire({
            icon: 'warning',
            title: 'El usuario es muy corto',
            html: 'Rectificalo',
            confirmButtonText:'Ok',
            padding: '1rem',
            backdrop: true,
            timer: 5000,
            allowOutsideClick: false,
            allowEnterKey: true,
            confirmButtonColor:'#BA55D3'
          });
      return false;
    }
    else if(password2.length<5)
    {
       Swal.fire({
            icon: 'warning',
            title: 'El password es muy corto',
            html: 'Rectificalo',
            confirmButtonText:'Ok',
            padding: '1rem',
            backdrop: true,
            timer: 5000,
            allowOutsideClick: false,
            allowEnterKey: true,
            confirmButtonColor:'#BA55D3'
          });
      return false;
    }
    return true;
}