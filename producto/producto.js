$(obtener_imprimante());
$(obtener_barrera());
$(obtener_acabado());

function obtener_imprimante(marca,solidos)
{
    $.ajax({
        url : 'producto/getimprimante.php',
        type : 'POST',
        dataType : 'HTML',
        data : { marca : marca, solidos : solidos },
    })

    .done(function(productos){
        $("#select_imprimante").html(productos)
    })
}

$(document).on('change', '#select_solidos', function()
{
    var marca = $("#select_marca").val();
    var solidos = $("#select_solidos").val();
    if (marca != "0")
    {
        obtener_imprimante(marca,solidos);
    }
    else
    {
        obtener_imprimante();
    }
});

$(document).on('change','#select_marca', function()
{
    var marca = $("#select_marca").val();
    var solidos = $("#select_solidos").val();
    if (marca != "0")
    {
        obtener_imprimante(marca,solidos);
    }
    else
    {
        obtener_imprimante();
    }
});

function obtener_barrera(marca,tipo)
{
    $.ajax({
        url : 'producto/getbarrera.php',
        type : 'POST',
        dataType : 'HTML',
        data : { marca : marca, tipo : tipo },
    })

    .done(function(productos){
        $("#select_barrera").html(productos)
    })
}

$(document).on('change', '#select_marca', function()
{
    var marca = $("#select_marca").val();
    var tipo = $("#select_tipobar").val();
    if (marca != "0" && tipo != "0")
    {
        obtener_barrera(marca,tipo);
    }
    else
    {
        obtener_barrera();
    }
});

$(document).on('change', '#select_tipobar', function()
{
    var marca = $("#select_marca").val();
    var tipo = $("#select_tipobar").val();
    if (marca != "0" && tipo != "0")
    {
        obtener_barrera(marca,tipo);
    }
    else
    {
        obtener_barrera();
    }
});


function obtener_acabado(marca,base)
{
    $.ajax({
        url : 'producto/getacabado.php',
        type : 'POST',
        dataType : 'HTML',
        data : { marca : marca, base : base },
    })

    .done(function(productos){
        $("#select_acabado").html(productos)
    })
}

$(document).on('change', '#select_marca', function()
{
    var marca = $("#select_marca").val();
    var base = $("#select_tipobase").val();
    if (marca != "0" && base != "0")
    {
        obtener_acabado(marca,base);
    }
    else
    {
        obtener_acabado();
    }
});

$(document).on('change', '#select_tipobase', function()
{
    var marca = $("#select_marca").val();
    var base = $("#select_tipobase").val();
    if (marca != "0" && base != "0")
    {
        obtener_acabado(marca,base);
    }
    else
    {
        obtener_acabado();
    }
});
