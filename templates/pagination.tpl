<div class="container-fluid">
	<div class="row">
		<div class="col d-flex justify-content-center align-items-center">
            <a {if $page != 1} href="{$path}&page={$page-1}" class="btn btn-primary" {/if} class="btn btn-secondary" type="button" disabled>< Anterior</a><h6 class="m-2"> - {$page} - </h6><a {if !$lastPage} href="{$path}&page={$page+1}" class="btn btn-primary mr-2" {/if} class="btn btn-secondary mr-2" type="button">Siguiente ></a>
		</div>
	</div>
</div>