<div class="container">
    <h2 class="mt-4">Eliminar Carta</h2>
        <form action="{substr_replace(BASE_URL ,"",-5)}/deleteCard" method="POST" autocomplete="off">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="ID de Carta" name="id" required>
                </div>
            </div>
        <button type="submit" class="btn btn-danger mt-2">Eliminar</button>
    </form>
</div>
    
<script src="{substr_replace(BASE_URL ,"",-5)}/js/jquery.min.js"></script>
<script src="{substr_replace(BASE_URL ,"",-5)}/js/bootstrap.min.js"></script>
<script src="{substr_replace(BASE_URL ,"",-5)}/js/scripts.js"></script>
