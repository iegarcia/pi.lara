@extends ("plantilla")

@section("titulo")
   Phi Organic - Login
@endsection

@section ("principal")
<div class="container-fluid">
<br>
  <section class="row">
    <h1 class="regh1">Login</h1>
  </section>
  <section class="registro row">
    <article class="form regformulario col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="regtitulo">Usuario y Contraseña</h2><br>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="text" value="@isset($_COOKIE['email'])?$_COOKIE[email'] : '' @endif">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="@isset($_COOKIE['password'])?$_COOKIE[password'] : '' @endif">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Recordarme
                            </label>
                        </div>
                        <input class="btn regboton" type="submit" value="Ingresar">
                        <hr>
                        <div class="forgot">
                            <a href="?page=reset">Olvide mi contraseña</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </article>
    <article class="form regcolumna2 col-xs-12 col-md-4 col-lg-4">
      <h2 class="regtitulo2">¿Acaso no estas registrado?</h2>
      <p>Registrate para estar al tanto de las ultimas novedades acerca de los productos, los nuevos productos de Phi Organic, proximos lanzamientos y un monton de cosas mas.</p>
      <br>
      <a class="btn regboton" href="registro">Registrarse</a>
    </article>
  </section>
</div>
@endsection