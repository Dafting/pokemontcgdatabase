<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pokémon TCG Database</title>

	<meta name="description" content="Una base de datos del juego de cartas coleccionables de Pokémon.">
	<meta name="author" content="Joaquín de la Iglesia">

	<link ref="icon" href="favicon.ico" type="image/x-icon">
	<link href="{BASE_URL}css/bootstrap.css" rel="stylesheet">
	<link href="{BASE_URL}css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col px-0">
				<nav class="navbar navbar-expand-sm navbar-light bg-light navbar-dark bg-dark">
					<a class="navbar-brand" href="{BASE_URL}">Pokémon TCG Database</a>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="{BASE_URL}showAllCards">Todas las cartas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{BASE_URL}showAllExpansions">Todas las expansiones</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle"
									id="navbarDropdownMenuLink" data-toggle="dropdown">Por tipo de carta</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="{BASE_URL}byCategories/pokemon">Pokémon</a> 
									<a class="dropdown-item" href="{BASE_URL}byCategories/trainers">Entrenador</a>
									<a class="dropdown-item" href="{BASE_URL}byCategories/energies">Energía</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle"
									id="navbarDropdownMenuLink" data-toggle="dropdown">Por expansión</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									{foreach from=$expansions key=key item=expansion}
									<a class="dropdown-item" href="{BASE_URL}byExpansion/{$expansions[$key]->id}">{$expansions[$key]->name}</a>
									{/foreach}
								</div>
							</li>
						</ul>
						<form class="form-inline" action="{BASE_URL}search" method="GET">
							<input class="form-control mr-sm-2" type="text" name="query" id="query">
							<button class="btn btn-primary my-2 mr-2 my-sm-0" type="submit">
								Buscar
							</button>
						</form>
						<button class="btn btn-secondary my-2 my-sm-0">
							<a href="{BASE_URL}showAdvancedSearch" class="text-white">Búsqueda Avanzada</a>
						</button>
						<ul class="navbar-nav ml-md-auto">
							<li class="nav-item">
								{if isset($smarty.session.username)}
								<p class="nav-link mb-0">{$smarty.session.username}<span class="sr-only"></span></p>
								</li>
								{if $smarty.session.isAdmin == 1}
									<li class="nav-item">
									<a class="nav-link" href="{BASE_URL}admin">Admin<span class="sr-only"></span></a>
									</li>
								{/if}
								<li class="nav-item">
								<a class="nav-link text-danger" href="{BASE_URL}logout">Logout<span class="sr-only"></span></a>
								</li>
								{/if}
								{if !isset($smarty.session.username)}
								<a class="nav-link" href="{BASE_URL}login">Login<span class="sr-only"></span></a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="{BASE_URL}register">Register<span class="sr-only"></span></a>
								</li>
								{/if}
							</li>
						</ul>
					</div>
				</nav>

