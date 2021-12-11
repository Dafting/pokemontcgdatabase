<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="card {$cardError}">
				<div class="card-body">
					<p class="card-text">
						{$cardId} - {$cardName} - {$cardType} - {$cardRarity} - {$cardExpansion} - {$cardErrorMessage}<a href="editCard/{$cardId}" class="btn btn-info" type="button">Editar carta</a><a href="deleteCard/{$cardId}" class="btn btn-danger" type="button">Eliminar carta</a><a href="./
viewCard/{$cardId}" class="btn btn-primary" type="button">Ver carta</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>