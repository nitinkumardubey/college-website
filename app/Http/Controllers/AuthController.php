<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blogs;
use App\LoginDetail;

 
// namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Http\Request;
// // use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\RegistersUsers;
 use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Auth;
// use Intervention\Image\Facades\Image;
// use App\Http\Controllers\Redirect;
 use DB;

// use Mail;
// use App\Http\Requests;

class AuthController extends Controller
{
    public function loginPage()
    {
        // if(isset(auth()->user()->user_type)=='admin')
        // {
        
        //  return redirect(route('dashboard'))->with('success', 'Welcome!');
        // }
        // else{
            $title = "Login";
            return view('admin.auth.login',compact('title'));
        //}
     
    }
   

    public function login(Request $request)
    {

        $email      = $request->email;
      $password   = $request->password;
  
      $this->validate(request(), [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

      
        if (auth()->attempt(request(['email', 'password'])) == false) {

           // echo 'wrong';
            return back()->with('error', 'The email or password is incorrect, please try again');
        }

       else{
           if(auth()->user()->status=='1' && auth()->user()->user_type=='admin')
           {
        
                 return redirect(route('dashboard'))->with('success', 'Welcome');
           }
           elseif(auth()->user()->status=='1' && auth()->user()->user_type=='vendor')
           {
        //    echo"hello";
            return redirect(route('vendor.dashboard'))->with('success', 'Login Successful!');
           }
           elseif(auth()->user()->status=='1' && auth()->user()->user_type=='staff')
           {
        //    echo"hello";
            return redirect(route('staff.dashboard'))->with('success', 'Login Successful!');
           }
           else
           {
            auth()->logout();
            return back()->with('error', 'Invalid Credentials!');
           }
     
       }
  
 
    }


    


    public function userLoginPage()
    {
        if(isset(auth()->user()->user_type)=='user')
        {
        
         return redirect(route('home'))->with('success', 'Login Successful!');
        }
        else{
            $title = "Login";
            return view('home.auth.login',compact('title'));
        }
     
    }
   

    public function userLogin(Request $request)
    {

        $email      = $request->email;
       $password   = $request->password;
  
      $this->validate(request(), [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

      
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with('error', 'The email or password is incorrect, please try again');
        }

       else{
        if(auth()->user()->status=='1' && auth()->user()->user_type=='user')
           {
           
            return redirect(route('home'))->with('success', 'Login Successful!');
           }
           else
           {
            auth()->logout();
            return back()->with('error', 'Invalid Credentials!');
           }
     
       }
  
 
    }



    //-------------------User Register---------------------------------//

    public function registerPage()
    {
        if(isset(auth()->user()->user_type)=='user')
        {
        
         return redirect(route('home'))->with('success', 'Login Successful!');
        }
        else{
            $title = "Login";
            return view('home.auth.register',compact('title'));
        }
     
    }
   

    public function register(Request $request)
    {

        $email      = $request->email;
       $password   = $request->password;
  
    $this->validate(request(), [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'mobile'=>'required',
        'company_address' => 'required',
        'country' => 'required',
        'state' => 'required',
        'city' => 'required',
        'zipcode' => 'required'

    ]);

      
            $result = User::create(request(['name', 'email', 'password','mobile','company_address','country','state','city','zipcode']));
           
            if (auth()->attempt(request(['email', 'password'])) == false) {
                return back()->with('error', 'The email or password is incorrect, please try again');
            }
    
           else{
               if(auth()->user()->status=='1' && auth()->user()->user_type=='user')
               {
            
                     return redirect(route('home'))->with('success', 'Registeration Successfull!');
                   // print_r($result);
               }
               else
               {
                auth()->logout();
                return back()->with('error', 'Invalid Credentials!');
               }
         
           }
           

         
    }


    public function logout(Request $request)
    {
        //Session::flush();
        if( auth()->user()->user_type=='admin')
        {
            auth()->logout();
             return redirect(route('login'))->with('success', 'You have logged out!');
        
        }
        else
        {
         auth()->logout();
         return back()->with('success', 'You have logged out!');
        }
        
    }

    public function vendorlogout(Request $request)
    {
        //Session::flush();
        if( auth()->user()->user_type=='vendor')
        {
            auth()->logout();
             return redirect(route('login'))->with('success', 'You have logged out!');
        
        }
        else
        {
         auth()->logout();
         return back()->with('success', 'You have logged out!');
        }
        
    }
    public function stafflogout(Request $request)
    {
        //Session::flush();
        if( auth()->user()->user_type=='staff')
        {
            auth()->logout();
             return redirect(route('login'))->with('success', 'You have logged out!');
        
        }
        else
        {
         auth()->logout();
         return back()->with('success', 'You have logged out!');
        }
        
    }

    public function userlogout(Request $request)
    {
        //Session::flush();
        if( auth()->user()->user_type=='user')
        {
            auth()->logout();
             return redirect(route('userLogin'))->with('success', 'You have logged out!');
        
        }
        else
        {
         auth()->logout();
         return back()->with('success', 'You have logged out!');
        }
         
    }


    //-------------------Password recovery-------------------------------
    public function passwordRecovery()
    {
        
            $title = "Password Recovery";
            return view('home.auth.password-recovery',compact('title'));
        
     
    }

    public function passwordRecoveryMailSend(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|email'
        ]);

        $email=$request->email;
        $res=User::where('email',$email)->count();
        if($res==1)
        {
            $new_pass=rand(100000,9999999);
            $data['password']= Hash::make($new_pass);
            $data['password']=bcrypt($new_pass);

           
          
             User::where('email',$email)->update($data);

        // $to = $request->email;
        // $subject = "Youre New Password.";
        // $txt = "Youre New Password.
        
        // name : $request->name .
        // email : $request->email .
        // Password : $request->new_pass . 
     
        // Payment Link : https://amivin.in/login ";
    

       
        // $headers = "From: amivinaccou22@gmail.com";
       
        
        // mail($to,$subject,$txt,$headers);


            return redirect(route('userLogin'))->with('success','New password has sent on your registered email address!');
        }
        else
        {
            return back()->with('error','Email does not exist!');
        }
            
        
     
    }


    // -------------------vendor register----------------------------------------------------//
    
    public function vendorRegister()
    {
        $title = "New Vendor Register";
     
       
          return view('admin.vendors.register',compact('title'));
    }
  
    
    
    public function vendorSave(Request $request)
    {
        $email      = $request->email;
       $password   = $request->password;

       $data=array();
     
       
        $this->validate(request(), [
            'name' => 'required|min:3',
            'supplier_address' => 'required',
            'mobile' => 'required',
            'mobile2' => 'required',
            'email' => 'required|email|unique:users',
            'weblink' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'password' => 'required'
           


         
          
        ]); 
      
        $image_name1='';

        if ($request->hasFile('myImage1')) {
           
            $file = $request->file('myImage1');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {

                        $image_name1 ='users1_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/vendors');
                        $file->move($destinationPath, $image_name1);
                        $data['img1']=$image_name1;
                        
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }
       
        $image_name2='';

        if ($request->hasFile('myImage2')) {
            $file = $request->file('myImage2');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {

                        $image_name2 ='users2_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/vendors');
                        $file->move($destinationPath, $image_name2);
                        $data['img2']=$image_name2;
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }
        
          
        $image_name3='';

        if ($request->hasFile('myImage3')) {
            $file = $request->file('myImage3');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {

                        $image_name3 ='users3_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/vendors');
                        $file->move($destinationPath, $image_name3);
                        $data['img3']=$image_name3;
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }
     
             
        $image_name4='';

        if ($request->hasFile('myImage4')) {
            $file = $request->file('myImage4');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {

                        $image_name4 ='users4_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/vendors');
                        $file->move($destinationPath, $image_name4);
                        $data['img4']=$image_name4;
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }

        // print_r($data);


        $data1=[
            'name' => $request->name,
            'supplier_address' => $request->supplier_address,
            'mobile' => $request->mobile,
            'mobile2' => $request->mobile2,
            'email' => $request->email,
            'weblink' => $request->weblink,
           
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'password' => $request->password,
           
            'user_type'=>'vendor'
            // 'img1' =>  $image_name1,
            // 'img2' =>  $image_name2,
            // 'img3' =>  $image_name3,
            // 'img4' =>  $image_name4
           
        ];

    
      $data2=array_merge($data1,$data);
   

        $result=User::create($data2);

         // $to = $request->email;
        // $subject = "Youre Registation is completed.";
        // $txt = "Welcome to Amivin global exports !
        
        // name : $request->name .
        // email : $request->email .
        // Password : $request->password . 
     
        // Payment Link : https://amivin.in/login ";
    

       
        // $headers = "From: amivinaccou22@gmail.com";
       
        
        // mail($to,$subject,$txt,$headers);
        
        return redirect(route('login'))->with('success', ' Successfully Registered!');
   

    }

   
    public function vendorPaymentPlan()
 {
     $title = "Payment Plan";
  
    
       return view('admin.vendors.paymentPlan',compact('title'));
 }
      
   

}
