<body class="hold-transition login-page">
<div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><img src="<?=$admLocal?>img/Logo-Midia.png"  alt="User Image"></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Faça o login para iniciar a sua sessão</p>
        <form action="<?=$admLocal?>users/login" id="UserLoginForm" method="post" accept-charset="utf-8">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="data[User][username]" maxlength="50" id="UserUsername" required="required" placeholder="Nome">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control" placeholder="Senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Lembrar usuário
                </label>
              </div>
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div>
          </div>
        </form>
        
         <!--<div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">Esqueceu sua senha?</a><br>
        <!--<a href="register.html" class="text-center">Register a new membership</a> -->
      </div>
    </div>
    