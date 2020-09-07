<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Planet Systems Uganda">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="web application for barcodes using mobile first approach">
    <meta name="description" content="GS1 Uganda website">
    <title>GS1 Uganda</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="icon" href="./images/newlogo1.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="mydashboard/css/userdashboard.css" rel="stylesheet">
  <!-- data tables custom styles -->
   <link href="mydashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
      <div>
        <span><a href="{{url('dashboard')}}" title="go back to dashboard"><i class="fa fa-arrow-left"></i></a></span>
        <span><img src="./images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"> <h4><strong style="color: #ff5721;">{{ucfirst(Auth()->user()->name)}}</strong> - View All Product Records</h4></span>
      </div>
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
</body>
</html>