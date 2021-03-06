<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <meta charset="UTF8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo')</title>
    
    @include('Admin.parts.partscss')

</head>

@php //Saber cual es el rol del cual el usuario ingreso
        $admin = false;
    if (Auth::user()->rol == 'Admin') {
        $admin = true;
    }
@endphp

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light verde">
                <div class="navbar-header" data-logobg="skin6">

              
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/am.fw.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                         
                           <!-- <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text 
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            Light Logo text -->
                            <!-- <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">


                    </ul>

                    <ul class="navbar-nav float-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/escuela.png" alt="user" class="rounded-circle" width="31">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                              <li>

                                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                              </li>
                            </ul>
                          </li>



                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
      
      
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    @if ($admin)
                        @include('Admin.parts.barraAdmin')
                    @else
                        @include('Admin.parts.barraInstitucion')
                    @endif

            </div>
        </aside>
                <!-- ============================================================== -->
                    <!-- Contenido de la plantilla -->
                <!-- ============================================================== -->

                <div class="page-wrapper">



        @if ($admin){{--  ES ADMIN --}}
            
                <div class="container-fluid">
                    <div class="row">
                        <!-- column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        
                                    @yield('contenidoAdministrador')
    
                                </div>
                            </div>
                        </div>
                    </div>      
                  </div>

        @else {{-- NO ES ADMIN --}}

            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
        
                                @yield('contenidoInstitucion')

                            </div>
                        </div>
                    </div>
                </div>      
              </div>

        @endif
    </div>
            </div>       
        </div>
    </div>

    

<script>
    var idSelect;

    function eliminarEst_Alerta(id) {
        idSelect = id;
        console.log(idSelect);
        Swal.fire({
        title: 'Eliminar',
        text: "Estas seguro de eliminar este estudiante",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar!'

        }).then((result) => {
    if (result.isConfirmed) {
        eliminarAJAX();

        Swal.fire(
        'Eliminado!',
        'En breves notara los cambios.',
        'success'
        )
        } 
      })
    }

    function eliminarAJAX() {
        $.ajax({
            url: "/eliminarEst_"+idSelect,
            /* type: 'POST', */
            success: function(result) {
                location.reload();
                /* $('#tabla').DataTable().ajax.reload(); */ ///Revisar despues, por que no se quiere actualizar
            }
        });
    }
</script>





    @include('Admin.parts.partsjs')
  
</body>

</html>