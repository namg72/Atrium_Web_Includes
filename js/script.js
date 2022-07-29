//Enlaces de las tarjetas a las paginas

let tarjetaLimpieza = document.getElementById("tarjetaPintura");
tarjetaLimpieza.addEventListener("click", () => window.location.href = "pintura.php");

let tarjetaLavanderia = document.getElementById("tarjetaLavanderia");
tarjetaLavanderia.addEventListener("click", () => window.location.href = "lavanderia.php");

let tarjetaCelulosa = document.getElementById("tarjetaLimpieza");
tarjetaCelulosa.addEventListener("click", () => window.location.href = "limpieza.php");