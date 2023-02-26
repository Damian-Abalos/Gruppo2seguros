const enviarForm = document.getElementById('enviar-form');

const nombre = document.getElementById('nombre');
const email = document.getElementById('email');
const telefono = document.getElementById('telefono');
const consulta = document.getElementById('consulta');

const errorNombre = document.getElementById('error-nombre');
const errorEmail = document.getElementById('error-email');
const errorTelefono = document.getElementById('error-telefono');
const errorConsulta = document.getElementById('error-consulta');

let botonesSeguro = document.getElementsByClassName('boton-seguro');
let img_btn_seguro_cerrado = document.getElementsByClassName('img-botones-seguro');
let img_btn_seguro_abierto = document.getElementsByClassName('img-botones-seguro-abierto');

let inputName = document.getElementById('nombre_asegurado');
let inputMail = document.getElementById('mail_asegurado');
let inputTelAsegurado = document.getElementById('tel_asegurado');
let inputTelTercero = document.getElementById('tel_tercero');
let textArea = document.getElementById('descripcion_siniestro');

let input1 = document.getElementById('cedula_frente_asegurado');
let input2 = document.getElementById('cedula_dorso_asegurado');
let input3 = document.getElementById('registro_frente_asegurado');
let input4 = document.getElementById('registro_dorso_asegurado');
let input5 = document.getElementById('dni_frente_asegurado');
let input6 = document.getElementById('dni_dorso_asegurado');
let input7 = document.getElementById('seguro_frente_asegurado');
let input8 = document.getElementById('seguro_dorso_asegurado');

let input9 = document.getElementById('cedula_frente_tercero');
let input10 = document.getElementById('cedula_dorso_tercero');
let input11 = document.getElementById('registro_frente_tercero');
let input12 = document.getElementById('registro_dorso_tercero');
let input13 = document.getElementById('dni_frente_tercero');
let input14 = document.getElementById('dni_dorso_tercero');
let input15 = document.getElementById('seguro_frente_tercero');
let input16 = document.getElementById('seguro_dorso_tercero');

window.onload = function(){
    $("#precarga").fadeOut();
    $("#hidden").removeClass("hidden");
}

function validarFotos() {
    if (
        input1.value == '' ||
        input2.value == '' ||
        input3.value == '' ||
        input4.value == '' ||
        input5.value == '' ||
        input6.value == '' ||
        input7.value == '' ||
        input8.value == '' ||
        input9.value == '' ||
        input10.value == '' ||
        input11.value == '' ||
        input12.value == '' ||
        input13.value == '' ||
        input14.value == '' ||
        input15.value == '' ||
        input16.value == ''
    ) {
        alert('por favor, complete todos los campos')
    } else {
        alert('fotos enviadas')
    }
}

function changeStateBtn(index) {

    for (let i = 0; i < botonesSeguro.length; i++) {
        img_btn_seguro_abierto[i].style.display = "none";
        img_btn_seguro_cerrado[i].style.display = 'block';
    }

    let boton = botonesSeguro[index]
    if (boton.ariaExpanded == 'true') {
        img_btn_seguro_abierto[index].style.display = 'block';
        img_btn_seguro_cerrado[index].style.display = 'none';
    } else {
        img_btn_seguro_abierto[index].style.display = 'none';
        img_btn_seguro_cerrado[index].style.display = 'block';
    }

}

function desplegarDesdeNav(id, collapse) {
    var x = document.getElementById(id).getAttribute("aria-expanded");
    if (x == "false") {
        x = "true"
        document.getElementById(id).classList.add('collapsed');
        document.getElementById(collapse).classList.remove('show');
    } else {
        document.getElementById(id).classList.remove('collapsed');
        document.getElementById(collapse).classList.add('show');
        x = "false"
    }
    document.getElementById(id).setAttribute("aria-expanded", x);
}

function validarConsulta() {

    if (nombre.value === null || nombre.value === '') {
        errorNombre.innerHTML = `ingresa tu nombre`
    } else {
        errorNombre.innerHTML = ""
    }

    if (email.value === null || email.value === '') {
        errorEmail.innerHTML = `ingresa tu email`
    } else {
        errorEmail.innerHTML = ""
    }

    if (telefono.value === null || telefono.value === '') {
        errorTelefono.innerHTML = `ingresa tu telefono`
    } else {
        errorTelefono.innerHTML = ""
    }

    if (consulta.value === null || consulta.value === '') {
        errorConsulta.innerHTML = `ingresa tu consulta`
    } else {
        errorConsulta.innerHTML = ""
    }
    if (nombre.value == '' || email.value == '' || telefono.value == '' || consulta.value == '') {
        alert('por favor, complete todos los campos')
        return (false)
    } else {
        alert('consulta enviada')
        axios({
            method: 'post',
            url: '/send-email',
            data: {
                nombre: nombre.value,
                email: email.value,
                telefono: telefono.value,
                consulta: consulta.value
            }
        });
    }
}