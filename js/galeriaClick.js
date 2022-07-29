let imagenes = new Array;

imagenes.push("imagenes/images-1.jpg");
imagenes.push("imagenes/images-2.jpg");
imagenes.push("imagenes/images-3.jpg");
imagenes.push("imagenes/images-4.jpg");

let cont = 0;
let fin = imagenes.length;

//Referenciamos el elemento img 
let foto = document.querySelector(".galeria img")

//asignamos a la flecha derecha un evento click para que vaya cargando fotos hasta que fin del array
document.getElementById("right_Arrow").addEventListener("click", () => {

    cont++;
    if (cont == fin) {
        cont = 0;
    }

    foto.src = imagenes[cont]


});

document.getElementById("left_Arrow").addEventListener("click", () => {

    cont--;
    if (cont <= 0) {
        cont = fin - 1;
    }

    foto.src = imagenes[cont]


});

