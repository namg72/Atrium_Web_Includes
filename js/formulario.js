let chekeado = document.getElementById("checkForm");
let aviso = document.getElementById("aceptarForm");
let enviar = document.getElementById("enviar");

chekeado.addEventListener("click", () => {

    if (chekeado.checked) {
        aviso.classList.add("ocultar")
        enviar.disabled = false;


    } else {

        aviso.classList.remove("ocultar");
        enviar.disabled = true;

    }
});