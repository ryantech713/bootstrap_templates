<?php include "assets/includes/header.php"; ?>
<div class="container" style="margin-top:75px;">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6 col-sm-12">
			<div class="card">
				<div class="card-body">
					<h2 class="text-center">Login</h2>
					<p class="text-center">Enter your credentials to login.</p>
					<form id="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
						<div class="mb-3">
							<label for="login_user">Username:</label>
							<input type="text" class="form-control <?php echo (!empty($login_user_error)) ? 'is-invalid' : ''; ?>" name="login_user" id="login_user" required="" />
							<?php echo (!empty($login_user_error)) ? "<span class='invalid-feedback mt-2'>$login_user_error</span>" : "";?>
						</div>
						<div class="mb-3">
							<label for="login_password">Password:</label>
							<input type="password" class="form-control <?php echo (!empty($login_password_error)) ? 'is-invalid' : ''; ?>" name="login_password" id="login_password" required="" />
							<?php echo (!empty($login_password_error)) ? "<span class='invalid-feedback mt-2'>$login_password_error</span>" : "";?>
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-primary w-100" value="Login"/>
							<?php echo (!empty($login_error)) ? "<span class='invalid-feedback mt-2'>$login_error</span>" : "";?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "assets/includes/footer.php"; ?>
