/* const formularios2 = document.getElementById('formulario');
const inputs2 = document.querySelectorAll('#formulario input');
const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    talla: /^[a-zA-ZÀ-ÿ\s]{1,3}$/, // Letras y espacios, pueden llevar acentos.
    valor: /^\d{3,14}$/,// 7 a 14 numeros.
    cantidad: /^\d{3,14}$/,// 7 a 14 numeros.
}
const campos = {
    Nombre: false,
    Talla: false,
    Valor:false,
    Cantidad: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "txtNombre":
            validarCampo(expresiones.nombre, e.target, 'Nombre');
            break;
        case "txtTalla":
            validarCampo(expresiones.talla, e.target, 'Talla');
            break;
        case "txtValor":
            validarCampo(expresiones.valor, e.target, 'Valor');
            break;
        case "txtCantidad":
            validarCampo(expresiones.cantidad, e.target, 'cantidad');
            break;

    }
   
}
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.add('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-grin-alt');
        document.querySelector(`#grupo${campo} i`).classList.remove('fa-angry');
        document.querySelector(`#grupo${campo} .error`).classList.remove('error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo${campo}`).classList.add('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-angry');
        document.querySelector(`#grupo${campo} i`).classList.remove('fa-grin-alt');
        document.querySelector(`#grupo${campo} .error`).classList.add('error-activo');
        campos[campo] = false;
    }
}
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);

})
formularios.addEventListener('submit', (e) => {
    e.preventDefault();
    if (campos.Usuario &&
        campos.Contraseña &&
        campos.Cedula &&
        campos.Nombre &&
        campos.Apellido &&
        campos.Celular &&
        campos.Email ) {
        formularios.submit();
    }else {
        Swal.fire({
            title: 'erro r!',
            text: 'Por favor rellene todos los campos correctamente.',
            icon: 'error',
            timer: 4000,
            timerProgressBar: true

        })
    }
})  */ 