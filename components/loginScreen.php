

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto login">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="login_username">Username</label>
                    <input type="text" class="form-control" id="login_username" aria-describedby="login_username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="login_password">Password</label>
                    <input type="password" class="form-control" id="login_password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" id="login_submit">Login</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <small>
                Not a user yet?
                <a href="#signUp" data-toggle="modal" data-target="#signUp">register here.</a>
            </small>
        </div>
    </div>
</div>


<!-- SignUp -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="Registrierung" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Registrierung">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="signUp_form">
                    <div class="form-group">
                        <label for="signup_username">Username</label>
                        <input type="text" class="form-control" id="signup_username" aria-describedby="Your username" placeholder="Username" required>
                        <small class="form-text text-muted">The name you will log in with.</small>
                        <div class="invalid-feedback">
                            Please insert an username.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="signup_password">Password</label>
                        <input type="password" class="form-control" id="signup_password" placeholder="Password" required>
                        <small class="form-text text-muted">Please insert a secure password.</small>
                        <div class="invalid-feedback">
                            You need to provide a password!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="signup_submit">Register now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>