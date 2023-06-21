<nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{url('home')}}">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
          <li class="nav-item">
            <a class="nav-link pl-3" href="./dashboard-analytics.html"><span class="ml-1 item-text">Analytics</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="./dashboard-sales.html"><span class="ml-1 item-text">E-commerce</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="./dashboard-saas.html"><span class="ml-1 item-text">Saas Dashboard</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="./dashboard-system.html"><span class="ml-1 item-text">Systems</span></a>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">Gestión</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Medicamentos')}}"><span class="ml-1 item-text">Medicamentos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('TipoMedicamentos')}}"><span class="ml-1 item-text">Tipo Medicamentos</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('TipoMedicamentoVentas')}}"><span class="ml-1 item-text">Tipo Venta Medicamentos</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Marcas')}}"><span class="ml-1 item-text">Marcas</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Laboratorios')}}"><span class="ml-1 item-text">Laboratorios</span></a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-credit-card fe-16"></i>
          <span class="ml-3 item-text">Personal</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Empleados')}}"><span class="ml-1 item-text">Empleados</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Provedores')}}"><span class="ml-1 item-text">Provedores</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Clientes')}}"><span class="ml-1 item-text">Clientes</span></a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-grid fe-16"></i>
          <span class="ml-3 item-text">Entradas</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="tables">
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Compras')}}"><span class="ml-1 item-text">Compras</span></a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-pie-chart fe-16"></i>
          <span class="ml-3 item-text">Salidas</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="charts">
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('Ventas')}}"><span class="ml-1 item-text">Ventas</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{url('MedicamentoBaja')}}"><span class="ml-1 item-text">Medicamento Baja</span></a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
