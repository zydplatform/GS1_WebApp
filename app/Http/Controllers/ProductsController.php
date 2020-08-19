<?php

namespace App\Http\Controllers;
Use App\Products;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Session;
use DB;
class ProductsController extends Controller
{
    //
    

    public function addProduct(Request $request)
    {  
        request()->validate([
        'pname' => 'required',
        'pprice' => 'required',
         'pdetails' => 'required',
            'pqty' => 'required',
            'mfgdate' => 'required',
            'expdate' => 'required',
            
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function create(array $data)
    {
      return Products::create([
        'productname' => $data['pname'],
        'productprice' => $data['pprice'],
        'productdetails' => $data['pdetails'],
        'productqty' => $data['pqty'],
        'mfgdate' => $data['mfgdate'],
        'expdate' => $data['expdate']
      ]);
    }

    
}
