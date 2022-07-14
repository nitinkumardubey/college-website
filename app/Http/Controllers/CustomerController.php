<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Redirect;

use App\User; 



use App\Http\Requests;

class CustomerController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $title = "All Student";
    $subtitle="allStudent";
    $activePage = "Student";
    $user_type='user';
    $cCount=User::where('user_type',$user_type)->count();
    $customers=User::where('user_type',$user_type)
       ->orderBy('id','DESC')
        ->sortable()->paginate(10);

      return view('admin.customers.list',compact('title','customers','activePage','subtitle'));
  }

  public function new()
  {
      $title = "New Student";
    $subtitle="newStudent";
    $activePage = "Student";
    $user_type='user';
    $customers=User::where('user_type',$user_type)
    ->where('created_at','=',date('Y-m-d'))
       ->orderBy('id','DESC')
    ->sortable()->paginate(1);
  
      return view('admin.customers.list',compact('title','customers','activePage','subtitle'));
  }

 
  public function edit(Request $request, $id)
  {
    $title = "Update Customer";
    $subtitle="allCustomer";
    $activePage = "Customer";
    $email=auth()->user()->email;
    $user_type='user';
   
    
    $user=User::where('id',$id)->where('user_type',$user_type)->first();
      return view('admin.customers.edit',compact('title','user','subtitle','activePage'));
  }

  
  public function update(Request $request, $id)
  {

    $title = "Update Customer";
    $subtitle="allCustomer";
    $activePage = "Customer";

    $this->validate(request(), [
      'name' => 'required',
      'mobile' => 'required',
      'address_line_1' => 'required',
      'city' => 'required',
      'state' => 'required',
      'country' => 'required',
      'zipcode' => 'required',
      'status' => 'required'
    
  ]); 

    $email=$request->email;
    
    User::where('email',$email)->where('id',$id)->update(request(['name','mobile','city','country','zipcode','status']));
        
    return redirect()->back()->with('success','Customer Profile Successfully Updated!');
  }


  public function destroy(Request $request)
  {
    $id=$request->id; 
      
        $delete = User::where('id', $id)->delete();
        if ($delete){
    
              return ['success' => 1, 'Customer Successfully Deleted!'];
              
            }
            else
                {
                    return ['success' => 0, 'Error Occured!'];
             
                }
  }
}
