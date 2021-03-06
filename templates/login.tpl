<div class="container-fluid fill">
	<div class="row justify-content-center fill">
		<div class="col-md-4 d-flex align-items-center align-content-center flex-wrap justify-content-center">
			<h3 class="mr-4">
				Iniciar sesión
			</h3>
			<form action="{BASE_URL}verifyLogin" method="POST" autocomplete="off">
				<div class="form-group">
					<label for="username">
						Usuario
					</label>
					<input type="text" class="form-control" id="username" name="username" />
				</div>
				<div class="form-group">
					<label for="password">
						Password
					</label>
					<input type="password" class="form-control" id="password" name="password" />
				</div>
				<button type="submit" class="btn btn-primary">
					Ingresar
				</button>
			</form>
		</div>
	</div>
</div>

	<script src="{BASE_URL}js/jquery.min.js"></script>
	<script src="{BASE_URL}js/bootstrap.min.js"></script>
	<script src="{BASE_URL}js/scripts.js"></script>