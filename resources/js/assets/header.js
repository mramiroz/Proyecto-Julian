$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
document.addEventListener('DOMContentLoaded', function () {
    // Agrega un listener para el clic en el emoji de la lupa
    document.getElementById('lupa').addEventListener('click', function () {
        // Simula la acción de enviar el formulario
        document.getElementById('busqueda-form').submit();
    });
});

$(document).ready(function (){
    function updateCount(){
        $.ajax({
            url: '/count',
            method: 'POST',
            success: function (data){
                $('#carrito').text("Carrito ("+ data.count + ")");
            }
    });
    }
    updateCount();
});

$('#buscador').on('input', function(){
    var query = $(this).val();
    $.get('/autocomplete?query=' + query, function(data){
        var suggestions = '';
        for (var i = 0; i < data.length; i++){
            suggestions += '<p>' + data[i].nombre + '</p>';
        }
        $('#suggestions').html(suggestions);
    });
})

document.getElementById('buscador').addEventListener('blur', function() {
    document.getElementById('suggestions').style.display = 'none';
});

document.getElementById('buscador').addEventListener('focus', function() {
    document.getElementById('suggestions').style.display = 'block';
});
