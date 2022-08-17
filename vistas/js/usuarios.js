function modificar(obj) {
    /* llamamos los campos del formulario modificar */
  
     Id= document.getElementById('MtxtId');
     Usuario= document.getElementById('MtxtUsuario');
     Contraseña= document.getElementById('MtxtContraseña');
     Nombre= document.getElementById('MtxtNombre');
     Apellido= document.getElementById('MtxtApellido');
     Cedula= document.getElementById('MtxtCedula');
     Email= document.getElementById('MtxtEmail');
     Celular= document.getElementById('MtxtCelular');
     Rol= document.getElementById('MtxtRol');
  
  
    /* asignamos los datos a los campos de el formulario modificar */
  
    Id.value = obj.children[0].innerHTML;
    Usuario.value = obj.children[1].innerHTML;
    Contraseña.value = obj.children[2].innerHTML;
    Nombre.value = obj.children[3].innerHTML;
    Apellido.value = obj.children[4].innerHTML;
    Cedula.value = obj.children[5].innerHTML;
    Email.value = obj.children[6].innerHTML;
    Celular.value = obj.children[7].innerHTML;
    Rol.value = obj.children[8].innerHTML;
  
  }
  function eliminarU(obj) {
    Swal.fire({
      title: 'ELIMAR USUARIO?',
      text: "Esta seguro de eliminar el usuario, se borrara de la base de datos!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Estoy seguro!',
  
    }).then((result) => {
  
      if (result.isConfirmed) {
        
        window.location = "index.php?ruta=tablaUsarios&eliminarU=" + obj.children[0].innerHTML;
  
      }
  
  
    })
    
  
  }