<div class="container">
    <h2 class="mt-4">Agregar Carta - Pokémon</h2>
    <p>Debe ingresar los siguientes valores:</p>
        <form action="addNewPokemonCard" method="POST" autocomplete="off">
            <div class="row">
                <div class="col">
                    <select name="type" class="form-control" placeholder="Tipo" data-toggle="tooltip" data-placement="top" title="Tipo del Pokémon">
                        <option value="w">Tipo - Agua</option>
                        <option value="p">Tipo - Psíquico</option>
                        <option value="l">Tipo - Eléctrico</option>
                        <option value="g">Tipo - Planta</option>
                        <option value="r">Tipo - Fuego</option>
                        <option value="f">Tipo - Lucha</option>
                        <option value="c">Tipo - Incoloro</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="HP (PV o PI en cartas en español)" name="hp">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="stage" class="form-control" placeholder="Fase" data-toggle="tooltip" data-placement="top" title="Fase Evolutiva">
                        <option value="0">Fase evolutiva - Básico</option>
                        <option value="1">Fase evolutiva - Etapa 1</option>
                        <option value="2">Fase evolutiva - Etapa 2</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control hasEvolution" placeholder="Evoluciona de..." name="evolvesFrom">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Nombre)" name="attackName1">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Descripción)" name="attackDesc1">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Daño)" name="attackDamage1">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 1 (Energías)" name="attackEnergies1" data-toggle="tooltip" data-placement="top" title="Se debe ingresar los caracteres correspondientes a cada tipo. Por ejemplo: Si un ataque usa 3 energías tipo agua, se debe colocar 'www'.">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Daño)" name="attackDamage2">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Energías)" name="attackEnergies2" data-toggle="tooltip" data-placement="top" title="Se debe ingresar los caracteres correspondientes a cada tipo. Por ejemplo: Si un ataque usa 3 energías tipo agua, se debe colocar 'www'.">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Nombre)" name="attackName2">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ataque 2 (Descripción)" name="attackDesc2">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <p>¿Tiene PokéPower?</p>
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="hasPokePower" value="1" data-toggle="collapse" data-target=".hasPokePowerShow:not(.show)">Sí
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="hasPokePower" value="0" data-toggle="collapse" data-target=".hasPokePowerShow.show" checked>No
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-3 collapse hasPokePowerShow">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre del PokéPower" name="pokePowerName">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Descripción del PokéPower" name="pokePowerDesc">
                </div>
            </div>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <select name="weakness" class="form-control" placeholder="Debilidad" data-toggle="tooltip" data-placement="top" title="Debilidad">
                        <option value="0">Debilidad - No</option>
                        <option value="w">Debilidad - Agua</option>
                        <option value="p">Debilidad - Psíquico</option>
                        <option value="l">Debilidad - Eléctrico</option>
                        <option value="g">Debilidad - Planta</option>
                        <option value="r">Debilidad - Fuego</option>
                        <option value="f">Debilidad - Lucha</option>
                        <option value="c">Debilidad - Incoloro</option>
                    </select>
                </div>
                <div class="col">
                    <select name="resistance" class="form-control" placeholder="Resistencia" data-toggle="tooltip" data-placement="top" title="Resistencia">
                        <option value="0">Resistencia - No</option>
                        <option value="w">Resistencia - Agua</option>
                        <option value="p">Resistencia - Psíquico</option>
                        <option value="l">Resistencia - Eléctrico</option>
                        <option value="g">Resistencia - Planta</option>
                        <option value="r">Resistencia - Fuego</option>
                        <option value="f">Resistencia - Lucha</option>
                        <option value="c">Resistencia - Incoloro</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <select name="retreatCost" class="form-control" placeholder="Costo de Retirada" data-toggle="tooltip" data-placement="top" title="Costo de Retirada">
                        <option value="0">Coste de retirada - 0</option>
                        <option value="1">Coste de retirada - 1</option>
                        <option value="2">Coste de retirada - 2</option>
                        <option value="3">Coste de retirada - 3</option>
                        <option value="4">Coste de retirada - 4</option>
                    </select>
                </div>
                <hr/>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Info Pokédex" name="pokedexInfo">
                    <input type="hidden" value="{$card_id}" name="card_id">
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>
</div>
    
<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>
