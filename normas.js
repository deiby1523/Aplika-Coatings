$(usos());

function usos(nit)
{
    $.ajax({
        url : 'norma/usos.php',
        type : 'POST',
        dataType : 'HTML',
        data : { nit : nit },
    })

    .done(function(uso){
        $("#seccion_usos").html(uso);
    })
}

$(document).on('change', '#select_cliente', function()
{
    var nit = $(this).val();
    if (nit != "")
    {
        usos(nit);
    }
    else
    {
        usos();
    }
});

$(temperaturas());

function temperaturas(uso, nit)
{
    $.ajax({
        url : 'norma/temperaturas.php',
        type : 'POST',
        dataType : 'HTML',
        data : { uso : uso , nit : nit},
    })

    .done(function(temp){
        $("#seccion_temperaturas").html(temp);
    })
}

$(document).on('change', '#select_uso', function()
{
    var uso = $('#select_uso').val();
    var nit = $('#select_cliente').val();

    if (uso != "" && uso != 'refineria')
    {
        temperaturas(uso, nit);
    }
    else
    {
        temperaturas();
    }
});

$(document).on('change', '#select_cliente', function()
{
    var uso = $('#select_uso').val();
    var nit = $('#select_cliente').val();

    if (uso != "" && uso != 'refineria')
    {
        temperaturas(uso, nit);
    }
    else
    {
        temperaturas();
    }
});