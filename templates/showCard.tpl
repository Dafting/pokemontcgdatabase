<div class="container-fluid">
	<div class="row">
		<div class="col mt-2 mr-2 d-flex justify-content-center">
			<img class="smaller-image" alt="Bootstrap Image Preview" src="{BASE_URL}img/cards/0.jpg" />
		</div>
		<div class="col mt-2 d-flex flex-column align-self-center">
			<h3>
				{$cardName} - {$expansionName}
			</h3>
			<dl class="{$pokemonCard}">
				<dt>
					{$stage} - Evoluciona de {$evolvesFrom} - {$hp} HP - Tipo <span class="tcg-symbol">{$typeSymbol}</span>
				</dt>
                <hr/>
				<dt class="{$pokePowerHidden}">
					Poder Pokémon: {$pokePowerName}
				</dt>
				<dd class="{$pokePowerHidden}">
					{$pokePowerDescription}
				</dd>
                <hr/>
				<dt class="{$attackHidden1}">
					{$attackName1} - <span class="tcg-symbol">{$attackEnergies1}</span> - {$attackDamage1}
				</dt>
				<dd class="{$attackHidden1}">
					{$attackDesc1}
				</dd>
				<dt class="{$attackHidden2}">
					{$attackName2} - <span class="tcg-symbol">{$attackEnergies2}</span> - {$attackDamage2}
				</dt>
				<dd class="{$attackHidden2}">
					{$attackDesc2}
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
			<dl class="{$trainerCard}">
                <hr/>
				<dd>
					{$trainerDescription}
				</dd>
			</dl>
			<dl class="{$energyCard}">
                <hr/>
				<dd>
					{$energyDescription}
				</dd>
			</dl>
		</div>
	</div>
</div>

<script src="{BASE_URL}js/jquery.min.js"></script>
<script src="{BASE_URL}js/bootstrap.min.js"></script>
<script src="{BASE_URL}js/scripts.js"></script>