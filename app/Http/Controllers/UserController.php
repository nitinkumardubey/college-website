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

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    //       $title = "Salons";
    // $subtitle="salons";
    // $activePage = "Salons";
    // $user_type='salon';
    // $salons=User::where('user_type',$user_type)
    //    ->orderBy('id','DESC')
    // ->sortable()->paginate(10);
    //   return view('admin.salons.list',compact('title','salons','activePage','subtitle'));
  }

  

  public function edit(Request $request, $id)
  {
  }

  
  public function update(Request $request, $id)
  {
  }
  public function destroy(Request $request)
  {
  }

  public function editMyProfile(Request $request)
  {
    $title = "My Profile";
    $subtitle="Profile";
    $activePage = "Web";
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    $user=User::where('user_type',$user_type)->where('email',$email)->first();
      return view('admin.profile.edit',compact('title','user','subtitle','activePage'));
  }
  public function saveMyProfile(Request $request)
  {
    
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    User::where('email',$email)->update(request(['name','mobile']));
        
    return redirect()->back()->with('success','Profile Successfully Updated!');
  }

  public function editPassword(Request $request)
  {
    $title = "My Profile";
    $subtitle="Password";
    $activePage = "Web";
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    $user=User::select('password')->where('user_type',$user_type)->where('email',$email)->first();
    //echo $user['password'];
      return view('admin.auth.passwords.edit',compact('title','user','subtitle','activePage'));
  }
  public function savePassword(Request $request)
  {
    
    $this->validate(request(), [
      'password' => 'required|min:6'
    
  ]);    
  
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;

    // $user=User::select('password')->where('user_type',$user_type)->where('email',$email)->first();
   // echo $user['password'].'<br>';

    $data['password']= Hash::make($request->password);
    $data['password']=bcrypt($request->password);

    //echo $data['password'];
    
  
        User::where('email',$email)->update($data);
        
    return redirect()->back()->with('success','Password Successfully Updated!');
  }
//************************************** Staff Profile *****************************************************//

public function staffeditMyProfile(Request $request)
  {
    $title = "My Profile";
    $subtitle="Profile";
    $activePage = "Web";
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    $user=User::where('user_type',$user_type)->where('email',$email)->first();
  
      return view('admin.profile.staffView',compact('title','user','subtitle','activePage'));
  }
  public function staffsaveMyProfile(Request $request)
  {
    
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    User::where('email',$email)->update(request(['name','mobile']));
        
    return redirect()->back()->with('success','Profile Successfully Updated!');
  }


  public function staffCreateProfile(Request $request)
  {
    $title = "Staff Profile";
    $subtitle="Staff Profile";
    $activePage = "Staff";
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    $user=User::where('user_type',$user_type)->where('email',$email)->first();
      return view('admin.staff.add',compact('title','user','subtitle','activePage'));
  }
  public function staffSaveProfile(Request $request)
  {
    
    $email=auth()->user()->email;
    $user_type=auth()->user()->user_type;
    
    User::where('email',$email)->update(request(['name','mobile']));
        
    return redirect()->back()->with('success','Profile Successfully Updated!');
  }
}
