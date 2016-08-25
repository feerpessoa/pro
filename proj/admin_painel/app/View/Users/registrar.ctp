<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><img src="<?=$admLocal?>img/Logo-Midia.png"  alt="User Image"></a>
      </div>
      <div class="register-box-body">
        <p class="login-box-msg">Registrar um novo membro</p>
        <form action="<?=$admLocal?>users/registrar" id="UserRegistrarForm" method="post" accept-charset="utf-8">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Nome" name="data[User][username]" maxlength="50" id="UserUsername" required="required">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <!--<div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>-->
          <div class="form-group has-feedback">
            <input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control" placeholder="Senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Confirmar senha">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Eu concordo com os <a href="#">Termos</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
            </div><!-- /.col -->
          </div>
        </form>

       <!--<div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>-->

        <a href="<?=$admLocal?>users/login" class="text-center">Eu já sou um membro</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->