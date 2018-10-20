{include file='templates/header.tpl'}
 <div class="container" style="margin-top: 100 px;">


      <div class="form-signin">
        <h2 class="form-signin-heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iniciar Sesion</font></font></h2>
        <label for="inputEmail" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User</font></font></label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Recuérdame
          </font></font>
		  </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registrarse</font></font></button>
      </div>

  </div>
	 

{include file='templates/footer.tpl'}