<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\DB;
Use App\User;
Use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }  

    public function registration()
    {
        return view('registration');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // 
            // ->where('userproduct_id', 2);
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {   

    // Validate the value...
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        //'contact_number' => 'required|contact_number|unique:users',
        'password' => 'required|min:6',
                'ownership' => 'required',
            'businessowner' => 'required',
            'companysize' => 'required',
            'contactp' => 'required',
            'telephone' => 'required',
            'regno' => 'required',
            'bname' => 'required',
            'btel' => 'required',
            'input_30' => 'required',
            'input_33' => 'required',
            'input_34' => 'required',
            'input_35' => 'required',
            'address' => 'required',
            'paddress' => 'required',
            'district' => 'required',
            'docs' => 'required',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');

    
    }

    public function payment(){
        return view('payment');
    }
    
    public function dashboard()
    {

      if(Auth::check()){
        $products = DB::table('products')->get();
        // $products = Product::all();
        return view('dashboard',['products' => $products]);
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    // delete
    // public function deleteProduct($id){
    //     Product::where('id', $id)->delete();
    //     return redirect('dashboard');
    // }

	public function create(array $data)
	{
	  return User::create([
	    'name' => $data['name'],
	    'email' => $data['email'],
	    'password' => Hash::make($data['password']),
        'ownership' => $data['ownership'],
        'owners' => $data['businessowner'],
        'companysize' => $data['companysize'],
        'contactperson' => $data['contactp'],
        'contacts' => $data['telephone'],
        'businessregno' => $data['regno'],
        'businessname' => $data['bname'],
        'businesscontact' => $data['btel'],
        'country' => $data['input_30'],
        'businesstype' => $data['input_33'],
        'businessline' => $data['input_34'],
        'employeesize' => $data['input_35'],
        'physicaladdress' => $data['address'],
        'postaladdress' => $data['paddress'],
        'district' => $data['district'],
        'documents' => $data['docs'],
	  ]);
	}
	
	public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}