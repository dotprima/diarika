 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand  navbar-white">
     <!-- Left navbar links -->



     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">

             <?php  
        $apiKey = env('Weather_API');
        $cityId = env('Weather_City');
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        
        curl_close($ch);
        $data = json_decode($response);
        $currentTime = time();
        ?>

             <?php if(isset($data)):?>
             <a class="nav-link" href="https://openweathermap.org/city/1642672">
                 <img src="http://openweathermap.org/img/wn/{{$data->weather[0]->icon}}@4x.png" alt="User Avatar"
                     style="width: 30px; height: 30px" class="img-size-50 img-circle mr-3 badge-warning">
                 <span class="right badge badge-info" id='name'>{{$data->name}}</span>
                 <span
                     class="right badge badge-<?php if($data->main->temp >=20 && $data->main->temp  <=25 )echo 'secondary'?><?php if($data->main->temp <=19 )echo 'primary'?><?php if($data->main->temp >=26 )echo 'danger'?>"
                     id='name'>{{$data->main->temp }}
                     °C</span>

             </a>
             <?php endif?>


         </li>

         <li class="nav-item d-none d-sm-inline-block">
             <span class="right badge badge-info" style="margin-top:13px;"> Clock</span>
             <span class="right badge badge-info" style="margin-top:13px;" id="span"></span>
             <script>
             var span = document.getElementById('span');

             function time() {
                 var d = new Date();
                 var s = d.getSeconds();
                 var m = d.getMinutes();
                 var h = d.getHours();
                 span.textContent =
                     ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
             }

             setInterval(time, 1000);
             </script>
         </li>

     </ul>





     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
        
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <img src="https://ui-avatars.com/api/?background=007BFF&color=FFFF&name={{Auth::user()->name}}"
                     alt="User Avatar" style="width: 30px; height: 30px" class="img-size-50 img-circle mr-3">
                 <span id='name'>{{Auth::user()->name}}</span>
             </a>
             <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                 <!-- <a href="{{URL::to('/')}}/admin/setting" class="dropdown-item">
                     <i class="fa fa-cog mr-2"></i>Website Setting
                 </a>
                 <a href="{{URL::to('/')}}/admin/account" class="dropdown-item">
                     <i class="fas fa-user-cog"></i> Account Setting
                 </a> -->
                 <div class="dropdown-divider"></div>
                 <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <a href="route('logout')" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                         <i class="fas fa-sign-out-alt"></i>
                         {{ __('Log Out') }}
                     </a>
                 </form>

             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="../../index3.html" class="brand-link">
         <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <li class="nav-item">
                     <a href="/dashboard" class="nav-link">
                         <i class="nav-icon far fa-image"></i>
                         <p>
                             Home
                         </p>
                     </a>
                     <a href="/dashboard" class="nav-link">
                         <i class="nav-icon far fa-image"></i>
                         <p>
                             Tambah Catalog
                         </p>
                     </a>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>