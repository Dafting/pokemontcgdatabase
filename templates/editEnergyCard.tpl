<div class="container">
    <h2 class="mt-4">Agregar Carta - Energía</h2>
    <form action="{BASE_URL}editEnergyCard/{card_id}" method="POST" autocomplete="off">
        <div class="row">
            <div class="col">
                <select name="type" class="form-control" placeholder="Tipo" data-toggle="tooltip" data-placement="top" title="Tipo de la Energía">
                    <option value="w" {if $type == 'w'}selected{/if}>Tipo - Agua</option>
                    <option value="p" {if $type == 'p'}selected{/if}>Tipo - Psíquico</option>
                    <option value="l" {if $type == 'l'}selected{/if}>Tipo - Eléctrico</option>
                    <option value="g" {if $type == 'g'}selected{/if}>Tipo - Planta</option>
                    <option value="r" {if $type == 'r'}selected{/if}>Tipo - Fuego</option>
                    <option value="f" {if $type == 'f'}selected{/if}>Tipo - Lucha</option>
                    <option value="c" {if $type == 'c'}selected{/if}>Tipo - Incoloro</option>
                </select>
                <select name="special" class="form-control" placeholder="Tipo de Energía" data-toggle="tooltip" data-placement="top" title="Tipo de Energía">
                    <option value="0">Energía Básica</option>
                    <option value="1">Energía Especial</option>
                </select>
                <input type="hidden" name="card_id" value="{$card_id}">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Descripción" name="description" required>
            </div>
        </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
</div>
<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>
