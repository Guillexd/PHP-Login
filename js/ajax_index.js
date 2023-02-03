//Validación asíncrona, para el error.php
//declaramos variables
const d=document;
const $boton_login=d.querySelector("#envio_login");
const $boton_registro=d.querySelector("#envio_registro");

//funciones
const validacion = (e) => {
  e.preventDefault();
  
  const $email = e.target.previousElementSibling.previousElementSibling.value
  const $passw = e.target.previousElementSibling.value
    const XHR = new XMLHttpRequest();
    XHR.open('POST', '/entregable/pages/error.php', true); 
    XHR.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    XHR.send('data_email=' + $email + "&data_contrasenia=" + $passw);
    XHR.addEventListener("readystatechange", ()=>{
      if (XHR.readyState == 4 && XHR.status >= 200 && XHR.status < 300) {
        const datos = XHR.responseText;
        d.querySelector("#mensaje_error").innerHTML = datos;
      }
    })

    //Otra forma de hacer el evento
    // XHR.onreadystatechange = function() {
    //   if (this.readyState == 4 && this.status >= 200 && this.status < 300) {
    //     const datos = this.responseText;
    //     d.querySelector("#mensaje_error").innerHTML = datos;
    //   } else {
    //     let error=this.statusText || "Ocurrió un error";
    //     d.querySelector("#mensaje_error").innerHTML = error;
    //   }
    // }
}

//Agregamos el evento
$boton_login.addEventListener("click", validacion); 
