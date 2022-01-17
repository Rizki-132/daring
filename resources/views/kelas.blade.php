@extends('layouts.template')

@section('title','ujian-online')

<header class="header">
    <a href="#" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        My Aplication
    </a>
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-right">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>{{Auth::user()->name}}<i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header bg-light-blue">
                        <img src="{{asset("template/img/avatar3.png")}}" class="img-circle" alt="User Image" />
                        <p>
                            {{Auth::user()->name}}
                            <small>{{Auth::user()->email }}</small>
                        </p>
                    </li>

                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{route('logout')}}" class="btn btn-default btn-flat"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Sign out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
 </nav>
 </header>

 <div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset("template/img/avatar3.png")}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, {{Auth::user()->name}}</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ route('kelas') }}">
                         <span>Kelas</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('ujian')}}">
                        <span>Ujian</span>
                    </a>
                </li>
            </ul>
        </section>
        
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->

  



<!-- Main content -->


@section('content')
<section class="content">
    <section class="content-header">
        <div class="container">
            <h1>Kelas</h1>
           <div class="header">
               <div class="card">   
                <div class="card text-white bg-success mt-6" !important>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-mt-12">
                                <div class="alert">
                                    <button class="btn btn-success btn-lg btn-block">Hadir</button>
                                </div> 
                                <div class="col-6">
                                    <div class="row">
                                        <div class="card">
                                            <table class="table">
                                                <thead class="thead-dark mb-6">
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
           </div>
        </div>
     </section>      
</section>

<!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
    
@endsection
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="{{asset("template/js/jquery-ui-1.10.3.min.js")}}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{asset("template/js/bootstrap.min.js")}}" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset("template/js/plugins/morris/morris.min.js")}}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{asset("template/js/plugins/sparkline/jquery.sparkline.min.js")}}" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{asset("template/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}" type="text/javascript"></script>
<script src="{{asset("template/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}" type="text/javascript"></script>
<!-- fullCalendar -->
<script src="{{asset("template/js/plugins/fullcalendar/fullcalendar.min.js")}}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("template/js/plugins/jqueryKnob/jquery.knob.js")}}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{asset("template/js/plugins/daterangepicker/daterangepicker.js")}}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("template/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{asset("template/js/plugins/iCheck/icheck.min.js")}}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{asset("template/js/AdminLTE/app.js")}}" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("template/js/AdminLTE/dashboard.js")}}" type="text/javascript"></script>  
@endsection