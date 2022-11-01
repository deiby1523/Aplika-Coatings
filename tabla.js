var imprimante_espesor = $('#imprimante_espesor').val();
var imprimante_desperdicio = $('#imprimante_desperdicio').val();
var imprimante_solidos = $('#imprimante_solidos').html();
var imprimante_area = $('#imprimante_area').val();
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
    resultado_gal = Math.ceil(resultado_gal / present) * present;
    var imprimante_gal = document.getElementById("imprimante_galones");
    imprimante_gal.value = resultado_gal;

    var resultado_und = resultado_gal / present;
    resultado_und = Math.ceil(resultado_und);
    var imprimante_unidades = document.getElementById("imprimante_unidades");
    imprimante_unidades.value = resultado_und;
} 
    

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

var barrera_espesor = $('#barrera_espesor').val();
var barrera_desperdicio = $('#barrera_desperdicio').val();
var barrera_solidos = $('#barrera_solidos').html();
var barrera_area = $('#barrera_area').val();
var barrera_rend_p = $('#barrera_rendimiento_practico').val();
var barrera_presentacion = $('#barrera_presentacion').html();

barrera(barrera_solidos, barrera_espesor, barrera_desperdicio, barrera_area, barrera_presentacion);

function barrera(solidos, espesor, desperdicio, areav, presentacion) 
{
    var n = 1.5;
    var solid = parseInt(solidos);
    var eps = parseInt(espesor);
    var desp = parseInt(desperdicio);
    var area = parseInt(areav);
    var present = parseInt(presentacion);
    var porcentaje = 100-desp;

    var resultado_rt = (n * solid) / eps;
    var barrera_rendimiento_t = document.getElementById("barrera_rendimiento_teorico");
    barrera_rendimiento_t.value = resultado_rt;
    

    var resultado_rp = (((n * solid) / eps)* porcentaje)/100;
    var barrera_rendimiento_p = document.getElementById("barrera_rendimiento_practico");
    barrera_rendimiento_p.value = resultado_rp;
        
    var resultado_gal = area / resultado_rp;
    resultado_gal = Math.ceil(resultado_gal / present) * present;
    var barrera_gal = document.getElementById("barrera_galones");
    barrera_gal.value = resultado_gal;   

    var resultado_und = resultado_gal / present;
    resultado_und = Math.ceil(resultado_und);
    var barrera_unidades = document.getElementById("barrera_unidades");
    barrera_unidades.value = resultado_und;
} 
    

// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


$(document).on('keyup', '#barrera_desperdicio', function()
{
    var espesor = $('#barrera_espesor').val();
    var solidos = $('#barrera_solidos').html();
    var desperdicio = $('#barrera_desperdicio').val();
    var area = $('#barrera_area').val();
    var presentacion = $('#barrera_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "") 
    {
        barrera(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        barrera();
    }
});


$(document).on('keyup', '#barrera_espesor', function()
{
    var espesor = $('#barrera_espesor').val();
    var solidos = $('#barrera_solidos').html();
    var desperdicio = $('#barrera_desperdicio').val();
    var area = $('#barrera_area').val();
    var presentacion = $('#barrera_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "")
    {
        barrera(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        barrera();

    }
});

$(document).on('keyup', '#barrera_area', function()
{
    var espesor = $('#barrera_espesor').val();
    var solidos = $('#barrera_solidos').html();
    var desperdicio = $('#barrera_desperdicio').val();
    var area = $('#barrera_area').val();
    var presentacion = $('#barrera_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "")
    {
        barrera(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        barrera();

    }
});

var acabado_espesor = $('#acabado_espesor').val();
var acabado_desperdicio = $('#acabado_desperdicio').val();
var acabado_solidos = $('#acabado_solidos').html();
var acabado_area = $('#acabado_area').val();
var acabado_rend_p = $('#acabado_rendimiento_practico').val();
var acabado_presentacion = $('#acabado_presentacion').html();

acabado(acabado_solidos, acabado_espesor, acabado_desperdicio, acabado_area, acabado_presentacion);

function acabado(solidos, espesor, desperdicio, areav, presentacion) 
{
    var n = 1.5;
    var solid = parseInt(solidos);
    var eps = parseInt(espesor);
    var desp = parseInt(desperdicio);
    var area = parseInt(areav);
    var present = parseInt(presentacion);
    var porcentaje = 100-desp;

    var resultado_rt = (n * solid) / eps;
    var acabado_rendimiento_t = document.getElementById("acabado_rendimiento_teorico");
    acabado_rendimiento_t.value = resultado_rt;
    

    var resultado_rp = (((n * solid) / eps)* porcentaje)/100;
    var acabado_rendimiento_p = document.getElementById("acabado_rendimiento_practico");
    acabado_rendimiento_p.value = resultado_rp;
        
    var resultado_gal = area / resultado_rp;
    resultado_gal = Math.ceil(resultado_gal / present) * present;
    var acabado_gal = document.getElementById("acabado_galones");
    acabado_gal.value = resultado_gal;   

    var resultado_und = resultado_gal / present;
    resultado_und = Math.ceil(resultado_und);
    var acabado_unidades = document.getElementById("acabado_unidades");
    acabado_unidades.value = resultado_und;
} 
    

// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


$(document).on('keyup', '#acabado_desperdicio', function()
{
    var espesor = $('#acabado_espesor').val();
    var solidos = $('#acabado_solidos').html();
    var desperdicio = $('#acabado_desperdicio').val();
    var area = $('#acabado_area').val();
    var presentacion = $('#acabado_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "") 
    {
        acabado(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        acabado();
    }
});


$(document).on('keyup', '#acabado_espesor', function()
{
    var espesor = $('#acabado_espesor').val();
    var solidos = $('#acabado_solidos').html();
    var desperdicio = $('#acabado_desperdicio').val();
    var area = $('#acabado_area').val();
    var presentacion = $('#acabado_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "")
    {
        acabado(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        acabado();

    }
});

$(document).on('keyup', '#acabado_area', function()
{
    var espesor = $('#acabado_espesor').val();
    var solidos = $('#acabado_solidos').html();
    var desperdicio = $('#acabado_desperdicio').val();
    var area = $('#acabado_area').val();
    var presentacion = $('#acabado_presentacion').html();


    if (espesor != "" && solidos != "" && desperdicio != "" && area != "" && presentacion != "")
    {
        acabado(solidos, espesor, desperdicio, area, presentacion);
    }
    else
    {
        acabado();

    }
});


