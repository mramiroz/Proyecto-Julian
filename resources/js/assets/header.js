$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
document.addEventListener('DOMContentLoaded', function () {
    // Agrega un listener para el clic en el emoji de la lupa
    document.getElementById('lupa').addEventListener('click', function () {
        // Simula la acción de enviar el formulario
        document.getElementById('busquedaForm').submit();
    });
});

$(document).ready(function (){
    function updateCount(){
        $.ajax({
            url: '/count',
            method: 'POST',
            success: function (data){
                console.log(data);
                $('#carrito').text("Carrito ("+ data.count + ")");
            }
    });
    }
    updateCount();
});
