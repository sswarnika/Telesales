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
            <a class="navbar-brand" href="#pablo">Feedbacks</a>
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
                                    <a class="dropdown-item" href="/logout">
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
      <ul style="margin: 0 auto;">
      <li style="display: inline-block; vertical-align: top;">
      <div class="content" style="width: 1000px">

      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Feedback History</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Date
                      </th>
                      <th>
                        Category
                      </th>
                      <th>
                        Sub Category
                      </th>
                      <th>
                        Second Sub Category
                      </th>
                      <th class="text-right">
                        Suggested Solutions
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          10/12/2021
                        </td>
                        <td>
                          Outbound Call
                        </td>
                        <td>
                          Seto Company
                        </td>
                        <td>
                          STB Damage
                        </td>
                        <td class="text-right">
                          Technician Booked
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20/1/2021
                        </td>
                        <td>
                          Outbound Call
                        </td>
                        <td>
                          Seto Company
                        </td>
                        <td>
                          Package Change Request
                        </td>
                        <td class="text-right">
                          Package Changed to Package number 1
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </li>
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