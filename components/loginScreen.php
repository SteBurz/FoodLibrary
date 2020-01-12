

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto login">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="login_username">Benutzername</label>
                    <input type="text" class="form-control" id="login_username" aria-describedby="login_username" placeholder="Dein Benutzername">
                </div>
                <div class="form-group">
                    <label for="login_password">Passwort</label>
                    <input type="password" class="form-control" id="login_password" placeholder="Dein Passwort">
                </div>
                <button type="submit" class="btn btn-primary" id="login_submit">Login</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <small>
                Noch kein Benutzeraccount? Registriere dich
                <a href="#signUp" data-toggle="modal" data-target="#signUp">jetzt.</a>
            </small>
        </div>
    </div>
</div>


<!-- SignUp -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="Registrierung" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Registrierung">Registrierung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="signUp_form">
                    <div class="form-group">
                        <label for="signup_username">Benutzername</label>
                        <input type="text" class="form-control" id="signup_username" aria-describedby="Dein Benutzername" placeholder="Benutzername" required>
                        <small class="form-text text-muted">Der Name mit dem du dich einloggen wirst.</small>
                        <div class="invalid-feedback">
                            Bitte gib einen Benutzernamen an.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="signup_password">Passwort</label>
                        <input type="password" class="form-control" id="signup_password" placeholder="Password" required>
                        <small class="form-text text-muted">Dein Passwort, bitte notieren und nicht weitergeben.</small>
                        <div class="invalid-feedback">
                            Du musst ein Passwort angeben
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="signup_submit">Jetzt registrieren</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>