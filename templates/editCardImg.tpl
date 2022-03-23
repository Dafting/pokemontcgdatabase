<div class="container">
    <h2 class="mt-4">Editar imagen de Carta</h2>
        <form action="{BASE_URL}editCardImg/{$cardId}" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="row mt-3">
                <div class="col">
                    <input type="file" name="input_name" id="imageToUpload" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
</div>