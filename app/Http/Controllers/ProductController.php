<?php
namespace App\Http\Controllers;
Use App\Product;
Use App\User;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Session;
use DB;

class ProductController extends Controller
{


   public function addProduct(Request $request){
            request()->validate([   
        'pname' => 'required',
        'pprice' => 'required',
        'pbrand' => 'required',
         'pdetails' => 'required',
            'pqty' => 'required',
            'item_no' => 'required',
            'mfgdate' => 'required',
            'expdate' => 'required',
            
        ]);
        $product = new Product();
        $product->productname = $request->pname;
        $product->productprice = $request->pprice;
        $product->productbrand = $request->pbrand;
        $product->productdetails = $request->pdetails;
        $product->productqty = $request->pqty;
        $product->item_reference_number = $request->item_no;
        $product->mfgdate = $request->mfgdate;
        $product->expdate = $request->expdate;

        $product->save();
        return redirect()->back();
   } 

   public function getProducts(){
    $products = Product::all();
    return view('all-products', ['products'=>$products]);
   }

    public function edit($id){
        $product = Product::where('id', $id)->first();
        return view('editproduct', ['product'=>$product]);
    }

    public function getBarcode($id){
        $product = Product::where('id', $id)->first();
        return view('get-barcode', ['product'=>$product]);
    }

    public function updateProduct(Request $request) {
        request()->validate([   
        'name' => 'required',
        'price' => 'required',
        'brand' => 'required',
         'details' => 'required',
            'qty' => 'required',
            'itemno' => 'required',
            
        ]);
        $product = Product::where('id', $request->id)->first();
        $product->productname = $request->name;
        $product->productprice = $request->price;
        $product->productbrand = $request->brand;
        $product->productdetails = $request->details;
        $product->item_reference_number = $request->itemno;
        $product->productqty = $request->qty;
        $product->save();
        return redirect('dashboard');
        }


    public function deleteProduct($id){
    	Product::where('id', $id)->delete();
        return redirect()->back();
    }


}
