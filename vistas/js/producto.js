const archivo = document.getElementById("imagen");
const boton = document.getElementById("boton");
boton.addEventListener("click", () => {
  //se crea un evento en el cual si se presiona click sobre la imagen se ejecuta el input tipo file
  archivo.click();
});

let vista_preliminar = (event) => {
  //esta funcion lo que permite es vizualisar la imagen del producto que se esta registrando
  let leer_img = new FileReader();
  let id_img = document.getElementById('img-imagen');
  leer_img.onload = () => {
    if (leer_img.readyState == 2) {
      id_img.src = leer_img.result;
    }
  }
  leer_img.readAsDataURL(event.target.files[0]);
}

/* capturamos la informacion del los producto */
function modificarP(obj) {
  /* llamamos los campos del formulario modificar */

  mCodigo = document.getElementById('MtxtCodigo');
  mNombre = document.getElementById('MtxtNombre');
  mDescripcion = document.getElementById('MtxtDescripcion');
  mTalla = document.getElementById('MtxtTalla');
  mValor = document.getElementById('MtxtValor');
  mCantidad = document.getElementById('MtxtCantidad');
  mImagen = document.getElementById('imagen');


  /* asignamos los datos a los campos de el formulario modificar */

  mCodigo.value = obj.children[0].innerHTML;
  mNombre.value = obj.children[1].innerHTML;
  mTalla.value = obj.children[2].innerHTML;
  mCantidad.value = obj.children[3].innerHTML;
  mDescripcion.value = obj.children[4].innerHTML;
  mValor.value = obj.children[5].innerHTML;
  mImagen.value = obj.children[6].innerHTML;

}
function eliminar(obj) {
  Swal.fire({
    title: 'ELIMINR PRODUCTO?',
    text: "Este Producto sera eliminado para siempre!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si estoy seguro'

  }).then((result) => {

    if (result.isConfirmed) {
      
      window.location = "index.php?ruta=tablaProductos&eliminar=" + obj.children[0].innerHTML;

    }


  })
  

}