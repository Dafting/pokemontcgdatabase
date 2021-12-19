<div class="container">
    <h2 class="mt-4">Eliminar Carta</h2>
        <form action="{BASE_URL}deleteCard" method="POST" autocomplete="off">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="ID de Carta" name="id" required>
                </div>
            </div>
        <button type="submit" class="btn btn-danger mt-2">Eliminar</button>
    </form>
</div>
    
<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>
