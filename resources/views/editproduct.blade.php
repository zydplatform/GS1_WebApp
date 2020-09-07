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
    <link rel="icon" href="../images/newlogo1.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <span><a href="{{url('dashboard')}}" title="go back to dashboard"><i class="fa fa-arrow-left"></i></a></span>
        <span><img src="../images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"> <h4><strong style="color: #ff5721;">{{ucfirst(Auth()->user()->name)}}</strong> - Update Product Record</h4></span>
         @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        @if(session('response'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif
        <form method="post" action="{{ route('product.update') }}">
            @method('POST') 
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $product->id }}">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $product->productname }}" />
            </div>

            <div class="form-group">
                <label for="price">Product Unit Price:</label>
                <input type="text" class="form-control" name="price" value="{{ $product->productprice }}" />
            </div>

            <div class="form-group">
                <label for="Brand">Product Brand:</label>
                <input type="text" class="form-control" name="brand" value="{{ $product->productbrand }}" />
            </div>
            <div class="form-group">
                <label for="details">Product Details:</label>
                <input type="text" class="form-control" name="details" value="{{ $product->productdetails }} "/>
            </div>
            <div class="form-group">
                <label for="qty">Product Quantity:</label>
                <input type="text" class="form-control" name="qty" value="{{ $product->productqty }}" />
            </div>
            <div class="form-group">
                <label for="itemno">Product/Item Reference Number:</label>
                <input type="text" class="form-control" name="itemno" value="{{ $product->item_reference_number }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</body>
</html>