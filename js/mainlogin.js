
function validarcita2()
{
  var usuario = document.getElementById("usuario").value;
  var password = document.getElementById("password").value;
  
    if(usuario.length<5)
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
    else if(password.length<5)
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