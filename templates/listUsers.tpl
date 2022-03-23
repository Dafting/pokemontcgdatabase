<div class="container-fluid">
	<div class="row">
		<div class="col">
            <div class="card">
            	<div class="card-body">
            		<p class="card-text">
                        {$username} - {if $isAdmin == 1}Administrador <a href="toggleAdmin/{$userId}" class="btn btn-warning mr-2" type="button">Degradar a usuario normal</a>{/if}{if $isAdmin == 0}Usuario normal <a href="toggleAdmin/{$userId}" class="btn btn-success mr-2" type="button">Promover a administrador</a>{/if} <a href="deleteUser/{$userId}" class="btn btn-danger mr-2" type="button">Eliminar usuario</a>
                    </p>
            	</div>
            </div>
        </div>
    </div>
</div>
