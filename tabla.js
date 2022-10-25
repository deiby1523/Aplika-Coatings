var imprimante_espesor = $('#imprimante_espesor').val();
var imprimante_desperdicio = $('#imprimante_desperdicio').val();
var imprimante_solidos = $('#imprimante_solidos').html();
var imprimante_area = $('#imprimante_area').val();
var imprimante_rend_p = $('#imprimante_rendimiento_practico').val();
var imprimante_presentacion = $('#imprimante_presentacion').html();

imprimante(imprimante_solidos, imprimante_espesor, imprimante_desperdicio, imprimante_area, imprimante_presentacion);

function imprimante(solidos, espesor, desperdicio, areav, presentacion) 
{
    var n = 1.5;
    var solid = parseInt(solidos);
    var eps = parseInt(espesor);
    var desp = parseInt(desperdicio);
    var area = parseInt(areav);
    var present = parseInt(presentacion);
    var porcentaje = 100-desp;

    var resultado_rt = (n * solid) / eps;
    var imprimante_rendimiento_t = document.getElementById("imprimante_rendimiento_teorico");
    imprimante_rendimiento_t.value = resultado_rt;
    

    var resultado_rp = (((n * solid) / eps)* porcentaje)/100;
    var imprimante_rendimiento_p = document.getElementById("imprimante_rendimiento_practico");
    imprimante_rendimiento_p.value = resultado_rp;
        
    var resultado_gal = area / resultado_rp;
    var imprimante_gal = document.getElementById("imprimante_galones");
    imprimante_gal.value = resultado_gal;   

    var resultado_und = resultado_gal / present;
    resultado_und = Math.ceil(resultado_und);
    var imprimante_unidades = document.getElementById("imprimante_unidades");
    imprimante_unidades.value = resultado_und;
    
    } 
    

// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


$(document).on('keyup', '#imprimante_desperdicio', function()
{
    var espesor = $('#imprimante_espesor').val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();
    var area = $('#imprimante_area').val();
    var presentacion = $('#imprimante_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "") 
    {
        imprimante(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        imprimante();

    }
});


$(document).on('keyup', '#imprimante_espesor', function()
{
    var espesor = $('#imprimante_espesor').val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();
    var area = $('#imprimante_area').val();
    var presentacion = $('#imprimante_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "")
    {
        imprimante(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        imprimante();

    }
});

$(document).on('keyup', '#imprimante_area', function()
{
    var espesor = $('#imprimante_espesor').val();
    var solidos = $('#imprimante_solidos').html();
    var desperdicio = $('#imprimante_desperdicio').val();
    var area = $('#imprimante_area').val();
    var presentacion = $('#imprimante_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "")
    {
        imprimante(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        imprimante();

    }
});

