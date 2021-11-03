<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ortpedia</title>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="/css/multiselect.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">

  <!--calcular edad -->
   <!-- <link rel="stylesheet" type="text/css" href=" {{asset('js/jquery-ui-1.12.1.custom/jquery-ui.css')}}">-->

  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="public/js/images/logo.jpg" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ex</b>Gr</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Administración</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <small class="bg-red">Online</small> 
                  <span class="hidden-xs">Gomez Walter Samuel</span> -->
                      
  <img src="/js/images/usuario.png"  class="img-circle"  style="width: 40px; height: 40px; ">
                    
                </a>

                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" img src="{{asset('./public/images/usuario.png')}}">
                    
                    <p>
                      Mariana Santana
                      <small></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class=""></i></i>
                <span></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li><a href="#"><i class="fa fa-circle-o"></i></a></li>
              </ul>
            </li>

        <li class="treeview">
              <a href="#">
              <i class=""></i>
                <span></span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i></a></li>
              </ul>
            </li>
        <li class="treeview">
              <a href="#">
              <i class="fa fa-user"></i>
                <span>Proveedores</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
            <li><a href="{{route('ortopedia.proveedores.index')}}"><i class="fa fa-circle-o"></i>Proveedores</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Baja de proveedores</a></li>
              </ul>
        </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i>
                <span>Parámetros</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
      <li><a href="{{route('ortopedia.condiciones_iva.index') }}"><i class="fa fa-circle-o"></i>Condiciones iva</a></li>
                  <li><a href="{{route('ortopedia.turnos.index') }}"><i class="fa fa-circle-o"></i>Días</a></li>
                  <li><a href="{{route('ortopedia.roles.index') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
    

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i>
                <span>Articulos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
            <li><a href="{{route('ortopedia.categorias.index') }}"><i class="fa fa-circle-o"></i>Categorias</a></li>
                <li><a href="{{route('ortopedia.productos.index') }}"><i class="fa fa-circle-o"></i>Productos</a></li>
    <li><a href="{{route('ortopedia.items_productos.index') }}"><i class="fa fa-circle-o"></i>Items productos</a></li>                
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-map-marker"></i> <span>Ubicación</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 <li><a href="{{route('ortopedia.paises.index')}}"><i class="fa fa-circle-o"></i>Paises</a></li> 
                <li><a href="{{route('ortopedia.provincias.index')}}"><i class="fa fa-circle-o"></i>Provincias</a></li> 
           <li><a href="{{route('ortopedia.localidades.index') }}"><i class="fa fa-circle-o"></i>Localidades</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Ortopedia</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>


                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                    	{{-- 	<div  id="logoGral" class="conteiner">
                    			@include('logoGral')
                    		</div>
 --}}
                           <div id="conteiner" class="col-md-12">
                              <!--Contenido-->
                              @yield('content')
                              <!--Fin Contenido-->
                           </div>
                     </div>
                        
                </div>
               </div><!-- /.row -->
              </div><!-- /.box-body -->
             </div><!-- /.box -->
           </div><!-- /.col -->
         </div><!-- /.row -->

       </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/awesome.js')}}"></script>
    <script src="{{asset('js/multiselect.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <!-- calcular edad -->
  <!--<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>-->
    
     <!-- <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
     </script> -->

    <script type="text/javascript">
      @yield('scrypts')
    </script>

<script type="text/javascript">
	$('#listaProv').click(function(){
		$("#logoGral").attr("hidden",true);
	});
</script>
@yield ('js')
  </body>
</html>
