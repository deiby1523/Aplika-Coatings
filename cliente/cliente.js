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


$(obtener_cliente_departamento());

function obtener_cliente_departamento(nit)
{
    $.ajax({
        url : 'cliente/getcliente_departamento.php',
        type : 'POST',
        dataType : 'HTML',
        data : { nit : nit },
    })

    .done(function(departamento){
        var departamento_c = document.getElementById("dep_cliente");
        departamento_c.value = departamento;
    })
}

$(document).on('keyup', '#inputnit', function()
{
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "")
    {
        obtener_cliente_departamento(valorBusqueda);
    }
    else
    {
        obtener_cliente_departamento();
    }
});

$(obtener_cliente_correo());

function obtener_cliente_correo(nit)
{
    $.ajax({
        url : 'cliente/getcliente_correo.php',
        type : 'POST',
        dataType : 'HTML',
        data : { nit : nit },
    })

    .done(function(correo){
        var correo_c = document.getElementById("correo_cliente");
        correo_c.value = correo;
    })
}

$(document).on('keyup', '#inputnit', function()
{
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "")
    {
        obtener_cliente_correo(valorBusqueda);
    }
    else
    {
        obtener_cliente_correo();
    }
});

$(obtener_cliente_tabla());

function obtener_cliente_tabla(busqueda)
{
    $.ajax({
        url : 'cliente/getcliente.php',
        type : 'POST',
        dataType : 'HTML',
        data : { busqueda : busqueda },
    })

    .done(function(clientes){
        $("#tabla_clientes").html(clientes);
    })
}

$(document).on('keyup', '#busqueda_cliente', function()
{
    var valorbusqueda = $('#busqueda_cliente').val();
    if (valorbusqueda != "")
    {
        obtener_cliente_tabla(valorbusqueda);
    }
    else
    {
        obtener_cliente_tabla();
    }
});