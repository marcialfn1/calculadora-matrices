// Efectos para las imagenes, inicializando con lo siguiente
AOS.init();

// Navbar
let ubicacionPrincipal = window.pageYOffset;

window.addEventListener("scroll", function(){
    let desplazamientoActual = window.pageYOffset;
    if(ubicacionPrincipal>=desplazamientoActual){
        this.document.getElementsByTagName("nav")[0].style.top = "0px"
    } else {
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicacionPrincipal = desplazamientoActual
}) //Al momento de terminar el Scroll se tiene que agregar Transition en el css para el elemento para su desplazamiento

// Menu
let enlacesHeader = document.querySelectorAll(".enlaces-header")[0]
let semaforo = true

document.querySelectorAll(".hamburguer")[0].addEventListener("click", function(){
    if(semaforo) {
        document.querySelectorAll(".hamburguer")[0].style.color = "#fff"
        semaforo = false
    } else {
        document.querySelectorAll(".hamburguer")[0].style.color = "#000"
        semaforo = true
    }

    enlacesHeader.classList.toggle("menudos")
})