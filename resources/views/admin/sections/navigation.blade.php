<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border:0;">
      <a href="javascript:;" class="site_title">
        <i class="fa fa-flask"></i><span> Latin Lab</span>
      </a>
    </div>
    <div class="clearfix"></div>
    <!--menu profile quick info-->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Bienvenido,</span>
        <h2>Alexis Holyoak</h2>
      </div>
    </div>
    <!--menu profile quick info-->
    <br/>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Servicios</h3>
        <ul class="nav side-menu">
          <li>
              <a href="{{route('home')}}">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  Inicio
              </a>
          </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-gears" aria-hidden="true"></i>
                    Servicios <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{route('tarifario.index')}}">
                      Tarifario
                    </a>
                  </li>
                  <li>
                    <a href="{{route('clases.index')}}">
                      Clases
                    </a>
                  </li>
                  <li>
                    <a href="{{route('cpts.index')}}">
                      Cpts
                    </a>
                  </li>
                  <li>
                    <a href="{{route('medidas.index')}}">
                      Unidades de medida
                    </a>
                  </li>
                  <li>
                    <a href="{{route('areas.index')}}">
                      Areas
                    </a>
                  </li>
                  <li>
                    <a href="{{route('normales.index')}}">
                      Valores normales
                    </a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    Atencion <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{route('pacientes.index')}}">
                      Pacientes
                    </a>
                  </li>
                  <li>
                    <a href="{{route('ocupacional.index')}}">
                      Ocupacional
                    </a>
                  </li>
                  <li>
                    <a href="{{route('comprobantes.index')}}">
                      Comprobantes
                    </a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    Sistema <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{route('medicos.index')}}">
                      Medicos
                    </a>
                  </li>
                  <li>
                    <a href="{{route('empresas.index')}}">
                      Empresas
                    </a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-eyedropper" aria-hidden="true"></i>
                    Laboratorio <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{route('solicitudes.index')}}">
                      Solicitudes
                    </a>
                  </li>
                  <li>
                    <a href="{{route('examenes.index')}}">
                      Examenes
                    </a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    Balance <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{route('balances.index')}}">
                      Ingresos y egresos
                    </a>
                  </li>
                  <li>
                    <a href="{{route('financieras.index')}}">
                      Razones financieras
                    </a>
                  </li>
                  <li>
                    <a href="{{route('inventario.index')}}">
                      Inventario
                    </a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    Personal <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{route('usuarios.index')}}">
                      Usuarios
                    </a>
                  </li>
                  <li>
                    <a href="{{route('empleados.index')}}">
                      Empleados
                    </a>
                  </li>
                  <li>
                    <a href="{{route('sueldos.index')}}">
                      Sueldos
                    </a>
                  </li>
                  <li>
                    <a href="{{route('incentivos.index')}}">
                      Incentivos
                    </a>
                  </li>
                  <li>
                    <a href="{{route('descuentos.index')}}">
                      Descuentos
                    </a>
                  </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
    <!-- sidebar menu -->
  </div>
</div>
