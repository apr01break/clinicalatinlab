@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')
<div>
  <div class="login_wrapper">
    <div class="fadeInRight animated login_form">
      <section class="login_content">
        <form class="" action="" method="post">
          <h1>Iniciar Sesion</h1>
          <div>
            <input type="email" name="email" value="" id="email" class="form-control" placeholder="correo electronico" required autofocus>
          </div>
          <div>
            <input id="password" type="password" class="form-control" name="password" placeholder="contraseña" required>
          </div>
          <div>
            <button class="btn btn-default submit" type="submit">Entrar</button>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">¿Olvidaste tu contraseña?
              <a href="{{route('reset')}}" class="to_register"> Reestablecer</a>
            </p>
            <div class="clearfix"></div>
            <br/>
            <div>
              <div class="h1">Latin Lab</div>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>
@endsection
