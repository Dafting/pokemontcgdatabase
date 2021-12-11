<div class="container">
    <h2 class="mt-4">Editar Carta</h2>
    <p>Debe ingresar los siguientes valores:</p>
        <form action="{BASE_URL}editCard/{$cardId}" method="POST" autocomplete="off">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{$cardName}" required>
                </div>
                <div class="col">
                    <select name="type" class="form-control" id="card-type" placeholder="Tipo" data-toggle="tooltip" data-placement="top" title="Tipo de carta">
                        <option value="1" {if $cardType == 1}selected{/if}>Pokémon</option>
                        <option value="2" {if $cardType == 2}selected{/if}>Entrenador</option>
                        <option value="3" {if $cardType == 3}selected{/if}>Energía</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="rarity" class="form-control" placeholder="Rareza" data-toggle="tooltip" data-placement="top" title="Rareza">
                        <option value="1" {if $cardRarity == 1}selected{/if}>Común</option>
                        <option value="2" {if $cardRarity == 2}selected{/if}>Infrecuente</option>
                        <option value="3" {if $cardRarity == 3}selected{/if}>Rara</option>
                    </select>
                </div>
                <div class="col">
                    <select name="expansion" class="form-control" placeholder="Expansión" data-toggle="tooltip" data-placement="top" title="Expansión">
                        {foreach from=$expansions key=key item=expansion}
						<option value="{$expansions[$key]->id} {if $expansion == $expansions[$key]->id}selected{/if}">{$expansions[$key]->name}</option>
						{/foreach}
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Número de Carta (en esa Expansión)" name="expNumber" value="{$expNumber}" required>
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-2">Editar</button>
    </form>
</div>
    
<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>
