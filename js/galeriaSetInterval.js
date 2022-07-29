let imagenes = new Array;

imagenes.push("imagenes/images-1.jpg");
imagenes.push("imagenes/images-2.jpg");
imagenes.push("imagenes/images-3.jpg");
imagenes.push("imagenes/images-4.jpg");

//Referenciamos el elemento img 
let foto = document.querySelector(".galeria img")

let cont = 0;
let fin = imagenes.length;


function cambiarfoto() {

    cont++;

    if (cont == fin) {
        cont = 0;
    }

    foto.src = imagenes[cont]

}

//llamamos al metodo cambira foto cada 4 segundos
setInterval(cambiarfoto, 4000);