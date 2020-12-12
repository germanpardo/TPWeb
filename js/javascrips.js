//Banners

var bannerIndex = 0;

mostrarBanner();


function mostrarBanner() {

    var i;
    var banner = document.getElementsByClassName("bclass");

    for (i = 0; i < banner.length; i++) {
        banner[i].style.display = "none";
    }

    bannerIndex++;
    if (bannerIndex > banner.length) {
        bannerIndex = 1
    }

    banner[bannerIndex - 1].style.display = "block";
    setTimeout(mostrarBanner, 2000);
}


//Cambio tamaño letra en el navegador

letraGrande();
letraPequeña();

function letraGrande(x) {
    x.style.fontSize = "18px";
    x.style.padding = "18px 30px";
}

function letraPequeña(x) {
    x.style.fontSize = "16px";
    x.style.padding = "20px 30px";
}

//Linea negra en el navegador de categorias

/*var navcat = document.getElementsByClassName("navcat");
var atrnavcat = navcat.getAttribute("margin-top");

linea();

function linea() {

    if (atrnavcat == "44px") {
        navcat.style.borderTopWidth = "2px";
        navcat.style.borderTopColor = "black";
        navcat.style.borderTopStyle = "solid";
    }

}*/

//Validacion del formulario de contacto

function validateForm() {
    var x1 = document.forms["myForm"]["fname"].value;
    if (x1 == "") {
        fnameval.style.display = "block";
        nombre.style.borderColor = "red";
        //alert ("Name must be filled out");
    } else {
        fnameval.style.display = "none";
        nombre.style.borderColor = "black";
    }

    var x2 = document.forms["myForm"]["femail"].value;
    if (x2 == "") {
        femailval.style.display = "block";
        inputmail.style.borderColor = "red";
        //alert ("Name must be filled out");
    } else {
        femailval.style.display = "none";
        inputmail.style.borderColor = "black";
    }

    var x3 = document.forms["myForm"]["comment"].value;
    if (x3 == "") {
        fcomment.style.display = "block";
        comentarios.style.borderColor = "red";
        //alert ("Name must be filled out");
    } else {
        fcomment.style.display = "none";
        comentarios.style.borderColor = "black";
    }

    if (x1 != "" && x2 != "" && x3 != "") {

    } else {
        return false;
    }
}