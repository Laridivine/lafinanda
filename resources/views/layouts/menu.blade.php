<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>{{ config('app.name', ) }}</title>

  <link rel="stylesheet" href="{{ asset('themes/lib/Hover/hover.css')}}">
  <link rel="stylesheet" href="{{ asset('themes/lib/fontawesome/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('themes/lib/weather-icons/css/weather-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('themes/lib/ionicons/css/ionicons.css')}}">
  <link rel="stylesheet" href=".{{ asset('themes/lib/jquery-toggles/toggles-full.css')}}">
  <link rel="stylesheet" href="{{asset('themes/lib/morrisjs/morris.css')}}">

  <link rel="stylesheet" href="{{asset('themes/css/quirk.css')}}">

  <script src="{{asset('themes/lib/modernizr/modernizr.js')}}"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{asset('themes/lib/html5shiv/html5shiv.js')}}"></script>
  <script src="{{asset('themes/lib/respond/respond.src.js')}}"></script>
  <![endif]-->
</head>

<body>

  <header>
    <div class="headerpanel">

      <div class="logopanel text-light">
        <h2><a href="index.html" style="color: white;">{{ config('app.name') }}</a></h2>
      </div><!-- logopanel -->

    </div><!-- header-->
  </header>

  <section>

    <div class="leftpanel">
      <div class="leftpanelinner">

        <!-- ################## LEFT PANEL PROFILE ################## -->

        <div class="tab-content">

          <!-- ################# MAIN MENU ################### -->
          <!-- leftpanel-profile -->
          <div class="media leftpanel-profile">

            <div class="media-body">
              <h4 class="media-heading">{{Auth::user()->name}} <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"></a></h4>
              <span>Médecin-chef</span>
            </div>
          </div><!-- leftpanel-profile -->
          <div class="nav nav-tabs nav-justified nav-sidebar" >

           <form method="POST" action="{{ route('logout') }}">
            @csrf
           <!-- <li class="tooltips" data-toggle="tooltip" title="Log Out"> -->
            <button type="submit" style="margin-left:100px ;"><i class="fa fa-sign-out" ></i>
            </button>
              
           </form>
            </li>
          </div>

          <div class="tab-pane active" id="mainmenu">

            <ul class="nav nav-pills nav-stacked nav-quirk">



              <li class="active"><a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Acceuil</span></a></li><br>
              <li><a href="{{ route('patients.index') }}"><i class="fa fa-users"></i> <span>Patient</span></a></li>
              <li><a href="{{ route('medecins.index') }}" class="nav-item nav-link"><i class="fa fa-user-md" aria-hidden="true"></i>Médecins</a></li>
              <li><a href="{{ route('specialites.index') }}" class="nav-item nav-link"><i class="fa fa-plus-square" aria-hidden="true"></i>Spécialités</a></li>
              <li><a href="{{ route('pathologies.index') }}" class="nav-item nav-link"><i class="fa fa-heartbeat" aria-hidden="true"></i>Pathologies</a></li>

            </ul>


          </div><!-- tab-pane -->

          <!-- ################### CONTACT LIST ################### -->

          <div class="tab-pane" id="contactmenu">
            <div class="input-group input-search-contact">
              <input type="text" class="form-control" placeholder="Search contact">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>



          </div><!-- tab-pane -->

          <!-- #################### SETTINGS ################### -->

          <!-- tab-pane -->


        </div><!-- tab-content -->

      </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->
  </section>

  <main class="py-4">
    @yield('content')
  </main>

  <script src="{{asset('themes/lib/jquery/jquery.js')}}"></script>
  <script src="{{asset('themes/lib/jquery-ui/jquery-ui.js')}}"></script>
  <script src="{{asset('themes/lib/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{asset('themes/lib/jquery-toggles/toggles.js')}}"></script>

  <script src="{{asset('themes/lib/morrisjs/morris.js')}}"></script>
  <script src="{{asset('themes/lib/raphael/raphael.js')}}"></script>

  <script src="{{asset('themes/lib/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('themes/lib/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('themes/lib/flot-spline/jquery.flot.spline.js')}}"></script>

  <script src="{{asset('themes/lib/jquery-knob/jquery.knob.js')}}"></script>

  <script src="{{asset('themes/js/quirk.js')}}"></script>
  <script src="{{asset('themes/js/dashboard.js')}}"></script>

</body>

</html>