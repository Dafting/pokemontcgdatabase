<div class="container">
    <h2 class="mt-4">Borrar Usuario</h2>
    <h3 class="mt-4 text-warning">¡Esta acción no se puede deshacer!</h3>
    <p>Debe ingresar los siguientes valores:</p>
        <form action="{BASE_URL}deleteUser" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary my-2">Agregar</button>
    </form>
</div>