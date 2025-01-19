<?php
include 'assets/includes/header.php';
?>
<!-- MODAL BUTTONS -->
                    <a class="btn btn-primary ms-md-2" role="button" id="signup-modal-btn" href="#" data-bs-target="#signup-modal" data-bs-toggle="modal">Signup</a>
                    <a class="btn btn-dark ms-md-2" role="button" id="login-modal-btn" href="#" data-bs-target="#login-modal" data-bs-toggle="modal">Login</a>

<!--LOGIN FORM MODAL START-->
<div class="modal fade" role="dialog" tabindex="-1" id="login-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Account Login</h4>
                <button class="btn-close close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="login-form">
                    <input type="hidden" name="action" value="login">
                    <div class="input-group mb-3">
						<span class="input-group-text">
							<i class="bi bi-person-circle fs-5"></i>
						</span>
                        <input class="form-control" type="text" id="login-username" name="login-username">
                    </div>
                    <div class="col input-group">
						<span class="input-group-text">
							<i class="bi bi-lock fs-5"></i>
						</span>
                        <input class="form-control" type="password" id="login-password" name="login-password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light close" type="button" data-bs-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Login" form="login-form">
            </div>
        </div>
    </div>
</div>

<!--SIGNUP FORM MODAL START-->
<div class="modal fade" role="dialog" tabindex="-1" id="signup-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Account</h4>
                <button class="btn-close close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Hover over the icons to check the Input Field requirements.</p>
                <form id="signup-form">
                    <input type="hidden" name="action" value="signup">
                    <div class="input-group mb-3">
						<span data-bs-toggle="tooltip" data-bss-tooltip="" class="input-group-text" title="Alphanumeric characters, dashes and underscores only with a max length of 25.">
							<i class="bi bi-person-circle"></i>
						</span>
                        <input class="form-control" type="text" id="username" name="username" maxlength="25" required="">
                    </div>
                    <div class="input-group mb-3">
						<span data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" class="input-group-text" title="Valid email address">
							<i class="bi bi-envelope"></i>
						</span>
                        <input class="form-control" type="text" id="email-1" name="email" pattern="/[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/" required="">
                    </div>
                    <div class="row mb-3">
                        <div class="col input-group">
							<span data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" class="input-group-text" title="Requires one uppercase letter, one lowercase letter and one number with a min length of 8 characters.">
								<i class="bi bi-lock"></i>
							</span>
                            <input class="form-control" type="password" id="password-1" name="password" minlength="8" required="">
                        </div>
                        <div class="col input-group">
							<span data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" class="input-group-text" title="Confirm password">
								<i class="bi bi-lock"></i>
							</span>
                            <input class="form-control" type="password" id="cpassword" name="cpassword"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light close" type="button" data-bs-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Sign Up" form="signup-form">
            </div>
        </div>
    </div>
</div>
<?php include 'assets/includes/footer.php'; ?>