$(obtener_imprimante());

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
    if (marca != "0" && solidos != "0")
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
    if (marca != "0" && solidos != "0")
    {
        obtener_imprimante(marca,solidos);
    }
    else
    {
        obtener_imprimante();
    }
});