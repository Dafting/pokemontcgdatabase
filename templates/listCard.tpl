<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card {$cardError}">
				<div class="card-body">
					<p class="card-text">
						{$cardId} - {$cardName} - {$cardType} - {$cardRarity} - {$cardExpansion} - {$cardErrorMessage}<a href="editCard/{$cardId}" class="btn btn-info mr-2" type="button">Editar carta</a><a href="editCardImg/{$cardId}" class="btn btn-success mr-2" type="button">Editar imagen de carta</a><a href="deleteCardImg/{$cardId}" class="btn btn-warning mr-2" type="button">Eliminar imagen de carta</a><a href="deleteCard/{$cardId}" class="btn btn-danger mr-2" type="button">Eliminar carta</a><a href="{BASE_URL}viewCard/{$cardId}" class="btn btn-primary mr-2" type="button">Ver carta</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>