const formularios = document.getElementById('formulariou');
const inputs = document.querySelectorAll('#formulariou input');
const expresiones = {
    cedula: /^\d{7,10}$/, // 7 a 14 numeros.
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    celular: /^\d{7,14}$/,// 7 a 14 numeros.
}
const campos = {
    Usuario: false,
    Contraseña: false,
    Cedula: false,
    Nombre: false,
    Apellido: false,
    Celular: false,
    Email: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "txtUsuario":
            validarCampo(expresiones.usuario, e.target, 'Usuario');
            break;
        case "txtContraseña":
            validarCampo(expresiones.password, e.target, 'Contraseña');
            break;
        case "txtNombre":
            validarCampo(expresiones.nombre, e.target, 'Nombre');
            break;
        case "txtApellido":
            validarCampo(expresiones.apellido, e.target, 'Apellido');
            break;
        case "txtCedula":
            validarCampo(expresiones.cedula, e.target, 'Cedula');
            break;
        case "txtEmail":
            validarCampo(expresiones.correo, e.target, 'Email');
            break;
        case "txtCelular":
            validarCampo(expresiones.celular, e.target, 'Celular');
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
}) 
