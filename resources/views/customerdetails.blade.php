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
            <a class="navbar-brand" href="#pablo">Customer Details</a>
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
      <ul style="margin: 0 auto;">
      <li style="display: inline-block; vertical-align: top;">
      <div class="content" style="width: 700px">

      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Personal Details</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Contact
                      </th>
                      <th>
                        Address
                      </th>
                      <th>
                        Package
                      </th>
                      <th class="text-right">
                        Status
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          9849660291
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td>
                          Package number 1
                        </td>
                        <td class="text-right">
                          Recharged
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </li>
              <li style="display: inline-block; vertical-align: top;">
      <div class="content" style="width: 450px;>

      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Device Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Serial Number
                      </th>
                      <th>
                        Type
                      </th>
                      <th>
                        Version
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          12345678
                        </td>
                        <td>
                          5G
                        </td>
                        <td>
                          2.0
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </li>
</ul>
                
          <ul style="margin: 0 auto; width: 1000px; margin-left: -25px">
            <li style="display: inline-block;">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Payment Details</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Date
                      </th>
                      <th>
                        Package
                      </th>
                      <th>
                        Description
                      </th>
                      <th class="text-right">
                        Amount Due
                      </th>
                      <th class="text-right">
                        Paid
                      </th>
                      <th class="text-right">
                        Method
                      </th>
                      <th class="text-right">
                        Advance
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          20/11/2021
                        </td>
                        <td>
                          Package number 1
                        </td>
                        <td>
                          Recharged, no package sent
                        </td>
                        <td class="text-right">
                          RS 0
                        </td>
                        <td>
                          RS 500
                        </td>
                        <td>
                          eSewa
                        </td>
                        <td>
                          RS 0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20/1/2020
                        </td>
                        <td>
                          Package number 4
                        </td>
                        <td>
                          Package change requested
                        </td>
                        <td class="text-right">
                          RS 0
                        </td>
                        <td>
                          RS 1000
                        </td>
                        <td>
                          eSewa
                        </td>
                        <td>
                          RS 0
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
       </li>
   </ul>
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