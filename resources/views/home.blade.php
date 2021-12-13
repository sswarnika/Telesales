<!DOCTYPE html>
<html lang="en">

<head>
 @extends('layouts.header')
</head>

<body class="">
  @extends('layouts.sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Home</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <li>
                       <i class="now-ui-icons users_single-02" style="margin-top: 15px"></i>
                </li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="panel-header panel-header-sm">
      </div>
            <div class="section">

            <div class="pageitem">
            <h1 style="text-align: center;">Employees of the month</h1>
            </div>

            <div class="pageitem">
                <ul>
                    <li style="display: inline-block; vertical-align: top; width: 250px;">
                        <div class="col">
                        <img src="{{asset('img/employee1.jpg')}}"><br>Gordan Fergus
                        </div>
                    </li>
                    <li style="display: inline-block; vertical-align: top; width: 250px; margin-right: 50px">
                        <div class="col">
                        <img src="{{asset('img/employee2.jpg')}}"><br>Swarnika Shakya
                        </div>
                    </li>
            </div>

            <div class="pageitem">
            <p>Congratulations for achieving your performance goals! <br>
            Thank you very much for your hard work on closing the multiple accounts that led to you reaching your sales quota. It must have taken you a lot of persistence and cooperation with our product team. <br>
            Since you have showed us the importance of determination and collaboration, we are naming you TeleSales’s Employee of the Month!  We are proud of your achievement, and we are sure there are more to come in upcoming years.  <br>
            Congratulations from all of us!  </p>
            </div>

            </div>


                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>