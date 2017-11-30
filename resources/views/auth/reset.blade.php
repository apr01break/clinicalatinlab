@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')
<div>
  <div class="login_wrapper">
    <div class="fadeInRight animated">
      <section class="login_content">
        <form class="" action="" method="post">
          <h1>Recordar</h1>
          <div>
            <input type="email" name="email" value="" id="email" class="form-control" placeholder="correo electronico" required autofocus>
          </div>
          <div>
            <button class="btn btn-default submit" type="submit">Recordar Contraseña</button>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">¿Recordaste tu contraseña?
              <a href="{{route('login')}}" class="to_register"> Volver</a>
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
