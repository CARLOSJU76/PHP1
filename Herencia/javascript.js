document.addEventListener('DOMContentLoaded', function() {
    let elemento = document.getElementById('contenedor');
    // Aquí puedes definir la función
    function ocultarElemento(){
        elemento.className = 'ocultos';
    }
    function volverMenu(){
        elemento.style.display='block';
    }
});
