$(document).ready(function () {

    let fecha = document.getElementsByClassName('morris-hover-row-label');
    fecha.addEventListener('onmouseover', calcularMontos);

    function calcularMontos(){
        fecha.replace("2020-04-","Abril ");
    }
})