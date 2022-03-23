<div class="container">
    <h2 class="mt-4">Búsqueda Avanzada</h2>
        <form action="{BASE_URL}advancedSearch" method="GET" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="name">
                </div>
                <div class="col">
                    <select name="type" class="form-control" placeholder="Tipo" data-toggle="tooltip" data-placement="top" title="Tipo de carta" id="card-type">
                        <option value="" selected>Tipo de carta</option>
                        <option value="1">Pokémon</option>
                        <option value="2">Entrenador</option>
                        <option value="3">Energía</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="rarity" class="form-control" placeholder="Rareza" data-toggle="tooltip" data-placement="top" title="Rareza">
                        <option value="" selected>Rareza</option>
                        <option value="1">Común</option>
                        <option value="2">Infrecuente</option>
                        <option value="3">Rara</option>
                    </select>
                </div>
                <div class="col">
                    <select name="expansion" class="form-control" placeholder="Expansión" data-toggle="tooltip" data-placement="top" title="Expansión">
                        <option value="" selected>Expansión</option>
						{foreach from=$expansions key=key item=expansion}
						<option value="{$expansions[$key]->id}">{$expansions[$key]->name}</option>
						{/foreach}
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Número de Carta (en su respectiva Expansión)" name="expNumber">
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
</div>