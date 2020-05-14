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
