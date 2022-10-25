<?php include("template/encabezado.php");?>

<h1>Crear Producto</h1>
<hr class="separador">

<!--------------------------------------------------------- crear producto   ---------------------------------------------------------------------------------->


<form action="">
    <div class="container">
        <div class="row g-2">
            <div class="form-floating col-4" style="width:30rem;">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Referencia</label>
            </div>

            <select class="form-select form-select-lg " style="width: 29.6rem; " aria-label=".form-select-lg example">
                <option selected>Marca</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="form-floating col-4">
                <input type="text" class="form-control" style="width:30rem;" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>
            

            <div class="form-floating col-4" style="width:30rem; margin-left: 4px;">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating col-4" style="width:30rem;">
                <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating col-4" style="width:30rem;">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating col-4" >
                <input type="text" class="form-control" style="width:30rem;" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>
        </div>
    </div>
</form>

<?php include("template/pie.php");?>