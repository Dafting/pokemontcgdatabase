<div class="container-fluid">
	<div class="row">
		<div class="col mt-2 mr-2 smaller-image d-flex justify-content-center">
			<img alt="Bootstrap Image Preview" src="{BASE_URL}img/cards/large/11.jpg" />
		</div>
		<div class="col mt-2 d-flex flex-column align-self-center">
			<h3>
				{$pokemonName} - {$expansionName}
			</h3>
			<dl>
				<dt>
					{$stage} - Evoluciona de {$evolvesFrom} - {$hp} HP - Tipo {$typeName} <span class="tcg-symbol">{$typeSymbol}</span>
				</dt>
                <hr/>
				<dt>
					Poder Pokémon: {$pokePowerName}
				</dt>
				<dd>
					{$pokePowerDescription}
				</dd>
                <hr/>
				<dt>
					Giro Fuego - <span class="tcg-symbol">rrrr</span> - 100
				</dt>
				<dd>
					Descarta 2 cartas de Energías unidas a Charizard para usar este ataque.
				</dd>
                <hr/>
				<dd>
                    Debilidad: <span class="tcg-symbol">{$weakness}</span> - Resistencia: <span class="tcg-symbol">{$resistance}</span> - Costo de Retirada: <span class="tcg-symbol">{$retreatCost}</span>
				</dd>
                <hr/>
				<dd class='font-italic'>
					{$pokedexText}
				</dd>
			</dl>
		</div>
	</div>
</div>

<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>