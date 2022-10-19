$(obtener_cliente_nombre());

function obtener_cliente_nombre(nit)
{
    $.ajax({
        url : 'cliente/getcliente_nombre.php',
        type : 'POST',
        dataType : 'HTML',
        data : { nit : nit },
    })

    .done(function(nombre){
        var nombre_c = document.getElementById("nombre_cliente");
        nombre_c.value = nombre;
    })
}

$(document).on('keyup', '#inputnit', function()
{
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "")
    {
        obtener_cliente_nombre(valorBusqueda);
    }
    else
    {
        obtener_cliente_nombre();
    }
});

$(obtener_cliente_telefono());

function obtener_cliente_telefono(nit)
{
    $.ajax({
        url : 'cliente/getcliente_telefono.php',
        type : 'POST',
        dataType : 'HTML',
        data : { nit : nit },
    })

    .done(function(telefono){
        var telefono_c = document.getElementById("telefono_cliente");
        telefono_c.value = telefono;
    })
}

$(document).on('keyup', '#inputnit', function()
{
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "")
    {
        obtener_cliente_telefono(valorBusqueda);
    }
    else
    {
        obtener_cliente_telefono();
    }
});

$(obtener_cliente_direccion());

function obtener_cliente_direccion(nit)
{
    $.ajax({
        url : 'cliente/getcliente_direccion.php',
        type : 'POST',
        dataType : 'HTML',
        data : { nit : nit },
    })

    .done(function(direccion){
        var direccion_c = document.getElementById("direccion_cliente");
        direccion_c.value = direccion;
    })
}

$(document).on('keyup', '#inputnit', function()
{
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "")
    {
        obtener_cliente_direccion(valorBusqueda);
    }
    else
    {
        obtener_cliente_direccion();
    }
});
