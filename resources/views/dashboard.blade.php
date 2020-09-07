<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Planet Systems Uganda">
  <meta name="keywords" content="web application for barcodes using mobile first approach">
  <meta name="description" content="GS1 Uganda website">
  <title>GS1 Uganda</title>
  <link rel="icon" href="mydashboard/images/newlogo1.png" type="image/icon type">
  <!-- Custom fonts for this template-->
  <link href="mydashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="mydashboard/css/userdashboard.css" rel="stylesheet">
  <!-- data tables custom styles -->
   <link href="mydashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <style type="text/css">
     .sidebar{
      /*background: white;*/
      /*color: black;*/
     }
     body#page-top{
      top: 0px;
     }
   </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-0">
          <img src="images/newlogo1.png" alt="gs1-logo" style="width: 80px;height: 60px;">
        </div>
        <div class="sidebar-brand-text mx-3">GS1 Uganda</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Barcodes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Barcode Image Validation</a>
            <a class="collapse-item" href="#">Barcode  Validation</a>
            <a class="collapse-item" href="#">Barcode Numbering</a>
            <a class="collapse-item" href="#">Get Barcode</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-cog"></i>
          <span>Transactions</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Finish Transactions</a>
            <a class="collapse-item" href="#">Pending Transactions</a>
            <a class="collapse-item" href="#">Mode of Payments</a>
            <a class="collapse-item" href="#">Barcode Ratings</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Products</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="all-products">List of all Products</a>
            <a class="collapse-item" data-toggle="modal" data-target="#productModal" data-backdrop="static" data-keyboard="false">Add Product</a>
            <a class="collapse-item" href="#">Products registered</a>
            <a class="collapse-item" href="#">Products Unregistered</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
<!--           <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->
          <div style="height: 100px; text-align: center;font-weight: bold;margin-top: 50px;">
           <h3>Welcome to GS1 Uganda  Dashboard <strong style="color: #ff5721;">{{ ucfirst(Auth()->user()->name) }}</strong></h3>
          </div>
            <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

            <!-- Nav Item - Alerts -->
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong style="color: #ff5721;"> {{ ucfirst(Auth()->user()->name) }}</strong></span>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong style="color: #ff5721;"> {{ ucfirst(Auth()->user()->email) }}</strong></span>
                <!-- <img class="img-profile rounded-circle" src="images/cocacola.png" alt="company-logo"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
             <!--             <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">My Barcodes (Annually)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">My Products </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">215,000,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-suitcase fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Membership Expiry</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">121 days left</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Transactions</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Barcodes Per Month</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Products,Transactions,Barcodes</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Products
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Barcodes
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Transactions
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- my data tables -->
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Product & Barcode Details</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <!-- <button class="btn btn-info">Add Product</button><br><br> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Product Code</th>
                      <th>Product Name</th>
                      <th>Product Unit Price</th>
                      <th>Product Brand</th>
                      <th>Product/Item Reference Number</th>
                      <th>Product Details</th>
                      <th>Product Quantity</th>
                      <th>Product MFG (manufactured date)</th>
                      <th>Product EXP (expiry date)</th>
                      <th>Generate Barcodes</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->productname }}</td>
                      <td>{{ $product->productprice }}</td>
                      <td>{{ $product->productbrand }}</td>
                      <td>{{ $product->item_reference_number }}</td>
                      <td>{{ $product->productdetails }}</td>
                      <td>{{ $product->productqty }}</td>   
                      <td>{{ $product->mfgdate }}</td>   
                      <td>{{ $product->expdate }}</td>
                      <td><a  href="barcode-product/{{ $product->id}}"><button style="background-color: #ff5721;cursor: pointer;color: white;border: 0px;">Get Barcodes</button></a></td>
                      <td><div class="d-flex flex-row">
                        <form method="delete">
                        @csrf
                        @method('delete')
                        <a data-toggle="modal" data-target="#deleteModal" title="delete"><i class="p-2 fa fa-trash" style="color: #ff5721;cursor: pointer;"></i></a></form>
                      
                        <a href="edit-product/{{ $product->id}}" title="edit"><i class="p-2 fa fa-edit" style="color: #ff5721;cursor: pointer;"></i></a></div></td>                  
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: rgba(255,10,51,1);">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-md btn-danger" href="{{url('logout')}}" name="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- delete product -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong style="color: #ff5721;">Delete Product</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: rgba(255,10,51,1);">Are you sure you want to delete this product ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-md btn-warning" name="delete"><a href="delete-product/{{ $product->id }}" style="color: white;">Confirm Delete</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- delete product -->
  <!-- edit product -->

  <!-- edit product -->
 
<!--         <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../index.html">Logout</a>
        </div> -->
      </div>
    </div>

      <!-- product modal -->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Register Your Product </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
         </div>
          <form id="prodform" action="{{route('product.add')}}" method="POST">
            {{ csrf_field() }}
                 
                  @if (count($errors) > 0)
                    <div class="alert alert-danger" id="show_error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="form-group">
              <label for="member">Company Membership No</label>
              <input type="number" class="form-control" id="member" name="member" aria-describedby="member" value="{{ ucfirst(Auth()->user()->id) }}">
            </div>
            <div class="form-group">
              <label for="pname">Product Name</label>
              <input type="text" class="form-control" id="pname" name="pname" aria-describedby="pname" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="pprice">Product Price</label>
              <input type="number" class="form-control" id="pprice" name="pprice" placeholder="Product Price">            </div>
              <div class="form-group">
              <label for="pbrand">Product Brand</label>
              <input type="text" class="form-control" id="pbrand" name="pbrand" placeholder="Product Brand">            </div>
              <div class="form-group">
              <label for="item_no">Product/Item Reference Number</label>
              <input type="number" class="form-control" id="item_no" name="item_no" placeholder="Item Reference Number">            </div>
            <div class="form-group">
              <label for="pdetails">Product Details</label>
              <input type="text" class="form-control" name="pdetails" id="pdetails" aria-describedby="rate" placeholder="product details eg: weight,size">
            </div>
            <div class="form-group">
              <label for="qty">Product Quantity </label>
              <input type="number" class="form-control" id="pqty" name="pqty" placeholder="Number of items">
            </div>
            <div class="form-group">
              <label for="mfg">Product MFG </label>
              <input type="date" class="form-control" id="mfgdate" name="mfgdate" placeholder="date manufactured">
            </div>
            <div class="form-group">
              <label for="exp">Product EXP </label>
              <input type="date" class="form-control" id="expdate" name="expdate" placeholder="expiry date">
            </div>

            <button title="addproduct" type="submit" id="addproduct" name="addproduct" class="btn btn-primary">Submit</button>
      </form>
    </div>
        </div>


      </div>
    </div>
    <!-- payment form -->
  <!-- Footer -->
      <footer class="sticky-footer bg-white" style="bottom: 0px;">
        <div class="">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; GS1 Uganda 2020</span>
            <img src="images/newlogo1.png" alt="gs1 logo" style="width: 80px;height: 70px;">
            <span>Developed By Planet Systems Uganda</span>
          </div>
        </div>
      </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="mydashboard/vendor/jquery/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="mydashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="mydashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="mydashboard/js/userdashboard.min.js"></script>
  <script src="mydashboard/js/userdashboard2.js"></script>

  <!-- Page level plugins -->
  <script src="mydashboard/vendor/chart.js/Chart.min.js"></script>
  <script src="mydashboard/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="mydashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Page level custom scripts -->
  <script src="mydashboard/js/demo/chart-area-demo.js"></script>
  <script src="mydashboard/js/demo/chart-pie-demo.js"></script>
  <script src="mydashboard/js/demo/datatables-demo.js"></script>
<!--   <script type="text/javascript">
  $('document').ready(function(){
        $("#myModal").modal('show');
        // event.preventDefault();
    });
</script> -->
<script type="text/javascript">
  
  $(document).ready(function () {
    // $('#payModal').modal().show();
    // $('#addproduct').attr('disabled', true);
    $('#editproduct').attr('disabled', true);
    $('input[type="text"],input[type="number"],input[type="date"]').on('keyup', function () {
        var pname = $("#pname").val();
        var pprice = $("#pprice").val();
        var pbrand = $("#pbrand").val();
        var item_no = $('#item_no').val(); 
        var pdetails = $("#pdetails").val();
        var pqty = $("#pqty").val();
        var mfgdate = $("#mfgdate").val();
        var expdate = $("#expdate").val();
        // var text_value = $('input[name="textField"]').val();
        if (pname != '' && pprice !='' && pbrand !='' && item_no !='' && pdetails !='' && pqty !='' && mfgdate !='' && expdate !='') {
            // $('#addproduct').attr('disabled', false);
        } else {
            // $('#addproduct').attr('disabled', true);
        }
    });
    // edit product 
    $('input[type="text"],input[type="number"],input[type="date"]').on('keyup', function () {
        var pname = $("#pname_edit").val();
        var pprice = $("#pprice_edit").val();
        var pbrand = $("#pbrand_edit").val();
        var item_no = $('#item_no_edit').val(); 
        var pdetails = $("#pdetails_edit").val();
        var pqty = $("#pqty_edit").val();
        // var mfgdate = $("#mfgdate_edit").val();
        // var expdate = $("#expdate_edit").val();
        // var text_value = $('input[name="textField"]').val();
        if (pname != '' && pprice !='' && pbrand !='' && item_no !='' && pdetails !='' && pqty !='') {
            $('#editproduct').attr('disabled', false);
        } else {
            $('#editproduct').attr('disabled', true);
        }
    });


    // first time visitors


});
</script>
</body>

</html>
