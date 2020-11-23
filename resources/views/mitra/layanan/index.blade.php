<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard Mitra</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/tampilan-admin/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- IonIcons -->
    <link
      rel="stylesheet"
      href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/tampilan-admin/dist/css/adminlte.min.css') }}" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
   <link rel="stylesheet" href="{{asset('tampilan-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/tampilan-admin/pages/examples/contacts.html" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input
              class="form-control form-control-navbar"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->

            <li class="nav-item">
            <li class="col-md-12">
              <a href="{{ url('/logout') }}">Logout</a>
            </li>
            </li>
          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img
            src="/tampilan-admin/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light"
            >Sistem Informasi Bekam</span
          >
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="/tampilan-admin/dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::guard('mitra')->user()->nama }}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
              <a href="{{ url('/mitra/index') }}" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>


            <li class="nav-header">MASTER DATA</li>
              <li class="nav-item">
                <a href="{{ (url('/mitra/layanan/index')) }}" class="nav-link active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Data Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/mitra/pesanan/index') }}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Data Pesanan</p>
                </a>
              </li>
              </ul>
            </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col">
                    <a href="{{url('/mitra/layanan/create')}}" class="btn btn-primary"><i class="fa fa-plus p-r-5"></i> Tambah Barang</a>
                  </div>
                </div></div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th><center>Nama Layanan</center></th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Pilihan</th>
                                        <th><center>Option</center> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($layanan as $key => $layanan)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$layanan->nama}}</td>
                                            <td>{{$layanan->deskripsi}}</td>
                                            <td>@currency($layanan->harga)</td>
                                            <td>{{$layanan->pilihan}}</td>
                                            <td>
                                                <center>
                                                <a href="{{url('/mitra/layanan/edit/'.$layanan->id_layanan)}}" class="btn btn-xs btn-warning btn-flat"><i class="fa fa-edit"></i></a>
                                                <a href="{{url('deleteLayanan/'.$layanan->id_layanan)}}" class="btn btn-xs btn-danger btn-flat" onclick="
                                                  return confirm('Anda Yakin Akan Menghapus Layanan ?');"><i class="fa fa-trash"></i></a>
                                                </center>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->

     <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
<script src="{{asset('/tampilan-admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/tampilan-admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/tampilan-admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('tampilan-admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{asset('tampilan-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
    @include('sweet::alert')
  </body>
</html>
