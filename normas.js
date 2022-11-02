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
        if (uso != "") {
            document.getElementById("seccion_usos").className += " mb-4";
        }
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
        if (temp != "") {
        document.getElementById("seccion_temperaturas").className += " mb-4";
        }
    })
}

$(document).on('change', '#select_uso', function()
{
    var uso = $('#select_uso').val();
    var nit = $('#select_cliente').val();

    if (uso != "")
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

    if (uso != "")
    {
        temperaturas(uso, nit);
    }
    else
    {
        temperaturas();
    }
});

$(sistemas());


function sistemas(uso, nit, temp)
{
    $.ajax({
        url : 'norma/sistemas.php',
        type : 'POST',
        dataType : 'HTML',
        data : { uso : uso , nit : nit, temp : temp},
    })

    .done(function(sistema){
        $("#seccion_sistemas").html(sistema);
        if (sistema != "") {
        document.getElementById("seccion_sistemas").className += " mb-4";
        }
    })
}

$(document).on('change', '#select_uso', function()
{
    var uso = $('#select_uso').val();
    var nit = $('#select_cliente').val();
    var temp = $('#select_temperatura').val();
    if (temp == undefined ) {
        temp = "";
    }

    if (uso != "" && nit != "")
    {
        sistemas(uso, nit, temp);
    }
    else
    {
        sistemas();
    }
});

$(document).on('change', '#select_cliente', function()
{
    var uso = $('#select_uso').val();
    var nit = $('#select_cliente').val();
    var temp = $('#select_temperatura').val();
    if (temp == undefined ) {
        temp = "";
    }

    if (uso != "" && nit != "")
    {
        sistemas(uso, nit, temp);
    }
    else
    {
        sistemas();
    }
});

$(document).on('change', '#select_temperatura', function()
{
    var uso = $('#select_uso').val();
    var nit = $('#select_cliente').val();
    var temp = $('#select_temperatura').val();
    if (temp == undefined ) {
        temp = "";
    }

    if (uso != "" && nit != "")
    {
        sistemas(uso, nit, temp);
    }
    else
    {
        sistemas();
    }
});