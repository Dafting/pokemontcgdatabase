<div class="container">
    <h2 class="mt-4">Editar Carta - Pokémon</h2>
    <p>Debe ingresar los siguientes valores:</p>
        <form action="{substr_replace(BASE_URL ,"",-5)}/editPokemonCard/{$card_id}" method="POST" autocomplete="off">
            <div class="row">
                <div class="col">
                    <select name="type" class="form-control" placeholder="Tipo" data-toggle="tooltip" data-placement="top" title="Tipo del Pokémon">
                        <option value="w" {if $type == 'w'}selected{/if}>Tipo - Agua</option>
                        <option value="p" {if $type == 'p'}selected{/if}>Tipo - Psíquico</option>
                        <option value="l" {if $type == 'l'}selected{/if}>Tipo - Eléctrico</option>
                        <option value="g" {if $type == 'g'}selected{/if}>Tipo - Planta</option>
                        <option value="r" {if $type == 'r'}selected{/if}>Tipo - Fuego</option>
                        <option value="f" {if $type == 'f'}selected{/if}>Tipo - Lucha</option>
                        <option value="c" {if $type == 'c'}selected{/if}>Tipo - Incoloro</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="HP (PV o PI en cartas en español)" name="hp" value="{$hp}" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="stage" class="form-control" placeholder="Fase" data-toggle="tooltip" data-placement="top" title="Fase Evolutiva">
                        <option value="0" {if $stage == 0}selected{/if}>Fase evolutiva - Básico</option>
                        <option value="1" {if $stage == 1}selected{/if}>Fase evolutiva - Etapa 1</option>
                        <option value="2" {if $stage == 2}selected{/if}>Fase evolutiva - Etapa 2</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control hasEvolution" placeholder="Evoluciona de..." name="evolvesFrom" value={$evolvesFrom}>
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Nombre)" name="attackName1" value="{$attackName1}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Descripción)" name="attackDesc1" value="{$attackDesc1}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Daño)" name="attackDamage1" value="{$attackDamage1}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Energías)" name="attackEnergies1" value="{$attackEnergies1}" data-toggle="tooltip" data-placement="top" title="Se debe ingresar los caracteres correspondientes a cada tipo. Por ejemplo: Si un ataque usa 3 energías tipo agua, se debe colocar 'www'.">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Nombre)" name="attackName2" value="{$attackName2}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Descripción)" name="attackDesc2" value="{$attackDesc2}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Daño)" name="attackDamage2" value="{$attackDamage2}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Energías)" name="attackEnergies2" value="{$attackEnergies2}" data-toggle="tooltip" data-placement="top" title="Se debe ingresar los caracteres correspondientes a cada tipo. Por ejemplo: Si un ataque usa 3 energías tipo agua, se debe colocar 'www'.">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <p>¿Tiene PokéPower?</p>
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="hasPokePower" {if $hasPokePower == 1}checked{/if} value="1" data-toggle="collapse" data-target=".hasPokePowerShow:not(.show)">Sí
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="hasPokePower" {if $hasPokePower == 0}checked{/if} value="0" data-toggle="collapse" data-target=".hasPokePowerShow.show">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-3 collapse hasPokePowerShow">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre del PokéPower" name="pokePowerName" value="{$pokePowerName}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Descripción del PokéPower" name="pokePowerDesc" value="{$pokePowerDesc}">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <select name="weakness" class="form-control" placeholder="Debilidad" data-toggle="tooltip" data-placement="top" title="Debilidad">
                        <option value="0" {if $weakness == '0'}selected{/if}>Debilidad - No</option>
                        <option value="w" {if $weakness == 'w'}selected{/if}>Debilidad - Agua</option>
                        <option value="p" {if $weakness == 'p'}selected{/if}>Debilidad - Psíquico</option>
                        <option value="l" {if $weakness == 'l'}selected{/if}>Debilidad - Eléctrico</option>
                        <option value="g" {if $weakness == 'g'}selected{/if}>Debilidad - Planta</option>
                        <option value="r" {if $weakness == 'r'}selected{/if}>Debilidad - Fuego</option>
                        <option value="f" {if $weakness == 'f'}selected{/if}>Debilidad - Lucha</option>
                        <option value="c" {if $weakness == 'c'}selected{/if}>Debilidad - Incoloro</option>
                    </select>
                </div>
                <div class="col">
                    <select name="resistance" class="form-control" placeholder="Resistencia" data-toggle="tooltip" data-placement="top" title="Resistencia">
                        <option value="0" {if $resistance == '0'}selected{/if}>Resistencia - No</option>
                        <option value="w" {if $resistance == 'w'}selected{/if}>Resistencia - Agua</option>
                        <option value="p" {if $resistance == 'p'}selected{/if}>Resistencia - Psíquico</option>
                        <option value="l" {if $resistance == 'l'}selected{/if}>Resistencia - Eléctrico</option>
                        <option value="g" {if $resistance == 'g'}selected{/if}>Resistencia - Planta</option>
                        <option value="r" {if $resistance == 'r'}selected{/if}>Resistencia - Fuego</option>
                        <option value="f" {if $resistance == 'f'}selected{/if}>Resistencia - Lucha</option>
                        <option value="c" {if $resistance == 'c'}selected{/if}>Resistencia - Incoloro</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="retreatCost" class="form-control" placeholder="Costo de Retirada" data-toggle="tooltip" data-placement="top" title="Costo de Retirada">
                        <option {if $retreatCost == ''}selected{/if} value="">Coste de retirada - 0</option>
                        <option {if $retreatCost == 'c'}selected{/if} value="c">Coste de retirada - 1</option>
                        <option {if $retreatCost == 'cc'}selected{/if} value="cc">Coste de retirada - 2</option>
                        <option {if $retreatCost == 'ccc'}selected{/if} value="ccc">Coste de retirada - 3</option>
                        <option {if $retreatCost == 'cccc'}selected{/if} value="cccc">Coste de retirada - 4</option>
                    </select>
                </div>
                <hr/>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Info Pokédex" name="pokedexInfo" value="{$pokedexInfo}" required>
                    <input type="hidden" value="{$card_id}" name="card_id">
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>
</div>
    
<script src="{substr_replace(BASE_URL ,"",-5)}/js/jquery.min.js"></script>
<script src="{substr_replace(BASE_URL ,"",-5)}/js/bootstrap.min.js"></script>
<script src="{substr_replace(BASE_URL ,"",-5)}/js/scripts.js"></script>
