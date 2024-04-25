let menuVisible = false;

function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList.remove("responsive");
        menuVisible = false;
    } else {
        document.getElementById("nav").classList.add("responsive");
        menuVisible = true;
    }
}

function seleccionar(){
    document.getElementById("nav").classList.remove("responsive");
    menuVisible = false;
}
