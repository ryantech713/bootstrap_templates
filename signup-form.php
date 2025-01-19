<?php
include 'assets/includes/header.php';
?>
<div class="container" style="margin-top:75px;">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-8 col-sm-12">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">Sign Up</h2>
					<p class="form-text">Fill in the form below to create a new account.</p>
					<form id="signup-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
						<div class="row mb-3">
							<div class="col-md-6">
								<label for="username">Username:</label>
								<input type="text" class="form-control <?php echo (!empty($username_error)) ? 'is-invalid' : '';?>" name="username" id="username" value="<?php echo (!empty(htmlspecialchars($_POST['username'])) ? htmlspecialchars($_POST['username']) : ''); ?>" required="" />
								<?php echo (!empty($username_error)) ? '<span class="invalid-feedback">$username_error</span>' : '';?>
							</div>
							<div class="col-md-6">
								<label for="email">Email Address:</label>
								<input type="email" class="form-control <?php echo (!empty($email_error)) ? 'is-invalid' : '';?>" name="email" id="email" value="<?php echo (!empty(htmlspecialchars($_POST['email'])) ? htmlspecialchars($_POST['email']) : ''); ?>" required="" />
								<?php echo (!empty($email_error)) ? '<span class="invalid-feedback">$email_error</span>' : '';?>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<label for="password">Password:</label>
								<input type="password" class="form-control <?php echo (!empty($password_error)) ? 'is-invalid' : '';?>" name="password" id="password" value="<?php echo (!empty(htmlspecialchars($_POST['password'])) ? htmlspecialchars($_POST['password']) : ''); ?>" required="" />
								<?php echo (!empty($password_error)) ? '<span class="invalid-feedback">$password</span>' : '';?>
							</div>
							<div class="col-md-6">
								<label for="confirm">Confirm Password</label>
								<input type="password" class="form-control <?php echo (!empty($confirm_error)) ? 'is-invalid' : '';?>" name="confirm" id="confirm" required="" />
								<?php echo (!empty($confirm_error)) ? '<span class="invalid-feedback">$confirm_error</span>' : '';?>
							</div>
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-primary w-100" value="SignUp"/>
							<?php echo (!empty($signup_error)) ? '<span class="invalid-feedback">$signup_error</span>' : '';?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'assets/includes/footer.php';?>
