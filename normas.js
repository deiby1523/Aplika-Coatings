$(usos());
$(temperaturas());

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

function temperaturas(uso)
{
    $.ajax({
        url : 'norma/temperaturas.php',
        type : 'POST',
        dataType : 'HTML',
        data : { uso : uso },
    })

    .done(function(temp){
        $("#seccion_temperaturas").html(temp);
    })
}

$(document).on('change', '#select_usos', function()
{
    var uso = $(this).val();
    if (uso != "" && uso != 'refinería')
    {
        temperaturas(uso);
    }
    else
    {
        temperaturas();
    }
});