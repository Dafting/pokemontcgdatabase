<div class="container-fluid fill">
	<div class="row justify-content-center fill">
		<div class="col-md-4 d-flex align-items-center align-content-center flex-wrap justify-content-center">
			<h3>
				Registro de usuario
			</h3>
			<form action="{substr_replace(BASE_URL ,"",-5)}/register" method="POST" autocomplete="off">
				<div class="form-group">
					<label>
						Usuario
					</label>
					<input type="text" class="form-control" id="username" name="username" />
				</div>
				<div class="form-group">
					<label>
						Password
					</label>
					<input type="password" class="form-control" id="password" name="password"/>
				</div>
				<button type="submit" class="btn btn-primary">
					Registrarse
				</button>
			</form>
		</div>
	</div>
</div>

	<script src="{substr_replace(BASE_URL ,"",-5)}/js/jquery.min.js"></script>
	<script src="{substr_replace(BASE_URL ,"",-5)}/js/bootstrap.min.js"></script>
	<script src="{substr_replace(BASE_URL ,"",-5)}/js/scripts.js"></script>
