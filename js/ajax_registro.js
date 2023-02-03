//Validación asíncrona, para registro.php
//declaramos variables
const d=document;
const $boton_registro=d.querySelector("#envio_registro");
const $verificar_contra1=d.querySelector("#contra1");
const $verificar_contra2=d.querySelector("#contra2");

$boton_registro.disabled = true;

//funciones
const registrar = (e) => {
    e.preventDefault();
    const $nombre=e.target.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.firstElementChild.value;
    const $dni=e.target.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.firstElementChild.value;
    const $email=e.target.previousElementSibling.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.firstElementChild.value;
    const $pass=e.target.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.firstElementChild.value;
    
    const XHR = new XMLHttpRequest();
    XHR.open('POST', '/entregable/pages/registro_mensaje.php', true); 
    XHR.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    XHR.send('data_nombre_r=' + $nombre + "&data_dni_r=" + $dni + "&data_email_r=" + $email + "&data_pass_r=" + $pass);
    XHR.addEventListener("readystatechange", ()=>{
    if (XHR.readyState == 4 && XHR.status >= 200 && XHR.status < 300) {
        const datos = XHR.responseText;
        d.querySelector("#mensaje_registro").innerHTML = datos;
    }
    })
    d.querySelector("#formulario_registro").reset();
    
  }

const verificador1 = (e) => {
  const $pass=e.target.value;
  const $pass2=e.target.closest(".formularioDiv").nextElementSibling.firstElementChild.firstElementChild.firstElementChild.value;
  if ($pass!==$pass2 || $pass2.length==""){
    $boton_registro.disabled = true;
  } else {
    $boton_registro.disabled = false;
  }
}

const verificador2 = (e) => {
  const $pass=e.target.value;
  const $pass2=e.target.closest(".formularioDiv").previousElementSibling.firstElementChild.firstElementChild.firstElementChild.value;
  if ($pass!==$pass2 || $pass2.length==""){
    $boton_registro.disabled = true;
  } else {
    $boton_registro.disabled = false;
  }
}


//Agregamos el evento
$boton_registro.addEventListener("click", registrar);
$verificar_contra1.addEventListener("keyup", verificador1);
$verificar_contra2.addEventListener("keyup", verificador2);