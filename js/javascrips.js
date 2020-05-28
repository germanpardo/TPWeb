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
    x.style.fontSize = "13px";
    x.style.padding = "13px 30px";
}

function letraPequeña(x) {
    x.style.fontSize = "12px";
    x.style.padding = "14px 30px";
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
