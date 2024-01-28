document.addEventListener('DOMContentLoaded', function () {
    // Agrega un listener para el clic en el emoji de la lupa
    document.getElementById('lupa').addEventListener('click', function () {
        // Simula la acción de enviar el formulario
        document.getElementById('busquedaForm').submit();
    });
});
