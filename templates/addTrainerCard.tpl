<div class="container">
    <h2 class="mt-4">Agregar Carta - Entrenador</h2>
    <form action="addNewTrainerCard" method="POST" autocomplete="off">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Descripción" name="description" required>
                <input type="hidden" name="card_id" value="{$card_id}">
            </div>
        </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
</div>
<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>
