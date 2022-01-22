<!DOCTYPE html>
<html lang="en">

<head>
  @extends('layouts.header')
</head>

<body class="">
  <div id = "my-div" style = "display:none;">
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
                       <i class="now-ui-icons users_single-02" style="margin-top: 5.8px"></i>
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
      <div class="content" style="width: 700px">
      <div class="row">
        <div class="col-sm-12">
        </div>
          <div class="col-md-12">
            <div class="card">
              <table><th>
              <div class="card-header">
                <h4 class="card-title"> Personal Details</h4>
              </div>
            </th><th>
              <div class="search-box" style="margin-left: 150px;">
                    <form 
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" style="margin-top:30px;">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" style="margin-top: 30px;">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    </div></th>
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

                    @foreach($cdetail as $key => $data)
                      <tr>    
                      <td>{{$data->cname}}</td>
                      <td>{{$data->contact}}</td>
                      <td>{{$data->address}}</td>
                      <td>{{$data->pkgname}}</td>
                      <td>{{$data->desp}}</td>                 
                    </tr>
                    @endforeach

                    </tbody>
                  </table>
              </li>
              <li style="display: inline-block; vertical-align: top;">
      <div class="content" style="width: 450px;">

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
                      @foreach($device as $key => $data)
                      <tr>    
                      <td>{{$data->serial_number}}</td>
                      <td>{{$data->type}}</td>
                      <td>{{$data->version}}</td>              
                    </tr>
                    @endforeach
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
                                      Description
                                    </th>
                                    <th class="text-right">
                                      Amount
                                    </th>
                                    <th class="text-right">
                                      Due
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
                                    @foreach($payments as $key => $data)
                                      <tr>    
                                      <td>{{$data->date}}</td>
                                      <td>{{$data->description}}</td>
                                      <td>{{$data->amount}}</td>
                                      <td>{{$data->due}}</td>
                                      <td>{{$data->paid}}</td>
                                      <td>{{$data->method}}</td>
                                      <td>{{$data->advance}}</td>                 
                                    </tr>
                                    @endforeach
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

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
 </div> 
</body>

</html>