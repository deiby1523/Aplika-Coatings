var imprimante_espesor = $('#imprimante_espesor').val();
var imprimante_desperdicio = $('#imprimante_desperdicio').val();
var imprimante_solidos = $('#imprimante_solidos').html();


imprimante_rendimiento_t(imprimante_solidos, imprimante_espesor);
imprimante_rendimiento_p(imprimante_solidos, imprimante_espesor, imprimante_desperdicio);



function imprimante_rendimiento_t(solidos, espesor)
{
    if (solidos != undefined && espesor != undefined) {
    var n = 1.5;
    var solid = parseInt(solidos);
    var eps = parseInt(espesor);
    var resultado = (n * solid) / eps;
    var imprimante_rendimiento_t = document.getElementById("imprimante_rendimiento_teorico");
    imprimante_rendimiento_t.value = resultado;
    }
}

function imprimante_rendimiento_p(solidos, espesor, desperdicio)
{
    if (solidos != undefined && espesor != undefined && desperdicio != undefined) {
    var n = 1.5;
    var solid = parseInt(solidos);
    var eps = parseInt(espesor);
    var desp = parseInt(desperdicio);
    var porcentaje = 100-desp;
    var resultado = (((n * solid) / eps)* porcentaje)/100;;
    var imprimante_rendimiento_p = document.getElementById("imprimante_rendimiento_practico");
    imprimante_rendimiento_p.value = resultado;
    }
}


var imprimante_area = $('#imprimante_area').val();
var imprimante_rend_p = $('#imprimante_rendimiento_practico').val();
console.log(imprimante_rend_p);

imprimante_galones(imprimante_rend_p, imprimante_area);

function imprimante_galones(imprimante_rp, imprimante_a)
{
    if (imprimante_rp != undefined && imprimante_a != undefined) {
    var rp = imprimante_rp;
    var area = parseInt(imprimante_a);
    var resultado = area / rp;
    var imprimante_gal = document.getElementById("imprimante_galones");
    imprimante_gal.value = resultado;
    }
}

// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$(document).on('change', '#imprimante_espesor', function()
{
    var espesor = $(this).val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();
    var imprimante_area = $('#imprimante_area').val();
    var imprimante_rend_p = $('#imprimante_rendimiento_practico').val();

    if (espesor != "" && solidos != "" && desperdicio != "" && imprimante_area != "" && imprimante_rend_p != "")
    {
        imprimante_rendimiento_t(solidos, espesor);
        imprimante_rendimiento_p(solidos, espesor, desperdicio);
        imprimante_galones(imprimante_rend_p, imprimante_area);

        
    }
    else
    {
        imprimante_rendimiento_p();
        imprimante_rendimiento_t();
        imprimante_galones();

    }
});

$(document).on('keyup', '#imprimante_espesor', function()
{
    var espesor = $(this).val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();
    var imprimante_area = $('#imprimante_area').val();
    var imprimante_rend_p = $('#imprimante_rendimiento_practico').val();


    if (espesor != "" && solidos != "" && desperdicio != "")
    {
        imprimante_rendimiento_t(solidos, espesor);
        imprimante_rendimiento_p(solidos, espesor, desperdicio);
        imprimante_galones(imprimante_rend_p, imprimante_area);
    }
    else
    {
        imprimante_rendimiento_p();
        imprimante_rendimiento_t();
        imprimante_galones();

    }
});

$(document).on('keyup', '#imprimante_desperdicio', function()
{
    var espesor = $('#imprimante_espesor').val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();

    if (espesor != "" && solidos != "" && desperdicio != "")
    {
        imprimante_rendimiento_t(solidos, espesor);
        imprimante_rendimiento_p(solidos, espesor, desperdicio);
    }
    else
    {
        imprimante_rendimiento_p();
        imprimante_rendimiento_t();
    }
});

$(document).on('change', '#imprimante_desperdicio', function()
{
    var espesor = $('#imprimante_espesor').val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();

    if (espesor != "" && solidos != "" && desperdicio != "")
    {
        imprimante_rendimiento_t(solidos, espesor);
        imprimante_rendimiento_p(solidos, espesor, desperdicio);
    }
    else
    {
        imprimante_rendimiento_p();
        imprimante_rendimiento_t();
    }
});

$(document).on('change', '#imprimante_rendimiento_practico', function()
{
    var imprimante_area = $('#imprimante_area').val();
    var imprimante_rend_p = $('#imprimante_rendimiento_practico').val();

    if (imprimante_area != "" && imprimante_rend_p != "")
    {
        imprimante_galones(imprimante_rend_p, imprimante_area);
    }
    else
    {
        imprimante_galones();
    }
});

