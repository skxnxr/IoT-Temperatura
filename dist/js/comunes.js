
$(document).ready(function () {
/// Url actual
let url = window.location.href;

/// Elementos de li
const tabs = ["index", "ayer", "rango", "historico", "como_funciona", "nuevo_modulo", "informacion"];

tabs.forEach(e => {
    /// Agregar .php y ver si lo contiene en la url
    if (url.indexOf(e + ".php") !== -1) {
        /// Agregar tab- para hacer que coincida la Id
        setActive("tab-" + e);
        
    }
    

});

/// Funcion que asigna la clase active
function setActive(id) {
    document.getElementById(id).setAttribute("class", "nav-link active");
    if (id === "tab-index" || id === "tab-ayer" || id === "tab-rango") {
        document.getElementById('grafico').setAttribute("class", "nav-link active");
    }
}


})
