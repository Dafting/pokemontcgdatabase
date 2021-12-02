<div class="container">
    <h2 class="mt-4">Agregar Carta</h2>
    <p>Debe ingresar los siguientes valores:</p>
        <form action="{BASE_URL}addNewCard" method="POST" autocomplete="off">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" required>
                </div>
                <div class="col">
                    <select name="type" class="form-control" placeholder="Tipo" data-toggle="tooltip" data-placement="top" title="Tipo de carta">
                        <option value="1">Pokémon</option>
                        <option value="2">Entrenador</option>
                        <option value="3">Energía</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="rarity" class="form-control" placeholder="Rareza" data-toggle="tooltip" data-placement="top" title="Rareza">
                        <option value="1">Común</option>
                        <option value="2">Infrecuente</option>
                        <option value="3">Rara</option>
                    </select>
                </div>
                <div class="col">
                    <select name="expansion" class="form-control" placeholder="Expansión" data-toggle="tooltip" data-placement="top" title="Expansión">
                        <option value="1">Base</option>
                        <option value="2">Jungla</option>
                        <option value="3">Fósil</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Número de Carta (en esa Expansión)" name="expNumber" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
</div>
    
<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>
