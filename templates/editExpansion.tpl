<div class="container">
    <h2 class="mt-4">Agregar Expansión</h2>
    <p>Debe ingresar los siguientes valores:</p>
        <form action="{BASE_URL}editExpansion/{$expansionId}" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{$expansionName}" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
</div>
