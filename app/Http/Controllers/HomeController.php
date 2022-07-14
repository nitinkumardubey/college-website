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
use App\Course;
use App\Category;
use App\Subcategory; 
use App\Subsubcategory; 
use App\Product;
use App\City;
use App\Order;
use App\Message;
use App\Rfq;


use App\Http\Requests;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
      $title = "Amivin Global Exports";
      
        return view('home.index',compact('title'));
    }
    public function header(Request $request)
    {
      $title = "Amivin Global Exports";
      $categories=Category::get();
      $subcat=Subcategory::get();
      $subsubcat=Subsubcategory::get();
        return view('home.layouts.header',compact('title','categories','subcat','subsubcat'));
    }
   
    // public function products(Request $request,$ss_id)
    // {
    //     $title = "Products";

    //     $res=Subsubcategory::where('id',$ss_id)->first();
      
    //     $ss_id=$res->subsubcategory_id;
    //     $subsubcategory=$res->name;

    //     $res1=Subcategory::where('id',$s_id)->first();
      
    //     $c_id=$res->category_id;
    //     $subcategory=$res->name;

    //     $res2=Category::where('id',$c_id)->first();
    //     $category=$res1->name;

    //     $subsubcategories=Subsubcategory::where('category_id',$c_id)->where('subcategory_id',$s_id)->get();
      

    //     $products=Product::where('category_id',$c_id)->where('subcategory_id',$s_id)->where('subsubcategory_id',$ss_id)->where('status','1')->where('stock','1')->paginate(18);
      
    //     //$products=Product::where('subsubcategory_id',$ss_id)->where('status','1')->where('stock','1')->paginate(18);
      

    //     // print_r ($products);
    //     return view('home.products',compact('title','category','subcategory','subsubcategory','products','subsubcategories','ss_id','s_id','c_id'));
        
    // }
    public function categories(Request $request)
    {
      $title = "All Categories";
      
      return view('home.categories',compact('title'));
    }

    public function subcategories(Request $request,$category_id)
    {
      $title = "Sub-Categories";
      $category=Category::where('id',$category_id)->first();
      
      return view('home.subcategories',compact('title','category_id','category'));
    }

    public function subsubcategories(Request $request,$subcategory_id)
    {
      $title = "Sub-sub-Categories";
      $subcategory=Subcategory::where('id',$subcategory_id)->first();
      
      return view('home.subsubcategories',compact('title','subcategory_id','subcategory'));
    }

    public function products(Request $request,$subsubcategory_id)
    {
        $title = "Products";
        $res=Subsubcategory::where('id',$subsubcategory_id)->first();
      
        $ss_id=$res->subsubcategory_id;
        $subsubcategory=$res->name;
    
      
      return view('home.products',compact('title','subsubcategory_id','subsubcategory'));
    }
    public function productDetails(Request $request, $id)
    {
    

      $product = Product::where('id',$id)->first();
      Product::where('id',$id)->increment('view','1');
      $title = $product['name'];
      
      return view('home.product-details',compact('title','product','id'));
    }

 
   
    public function admission(Request $request)
    {
      $title = "Admission";

      return view('home.admission',compact('title'));
    }

    public function courses(Request $request)
    {
      $title = "courses";
      $courses=Course::get();
      return view('home.courses',compact('title','courses'));
    }
    public function student(Request $request)
    {
      
     
       
        $this->validate(request(), [
            'name' => 'required|min:3',
           
            'mobile' => 'required',
         
            'email' => 'required|email'
          
           
 
 
         
          
        ]); 
        

 
        $data=[
            'name' => $request->name,
       
            'city' => $request->city,
         
            'mobile' => $request->mobile,
           
            'email' => $request->email,
          
        
            'user_type'=>'user'
           
     
           
        ];
 
        $result=User::create($data);
 

 
        return redirect()->back()->with('success', 'Successfully Submited!');
      }
 
    public function contactSave(Request $request)
    {
      Message::create(request(['name','email','mobile','subject','message']));
        
    return redirect()->back()->with('success','Message Successfully Submitted! Soon you will be contacted by our team!');
    }

    public function contact(Request $request)
    {
      $title = "Contact Us";

      return view('home.contact',compact('title'));
    }
    //----------------AddCart--------------------------------------------

          public function addCart(Request $request)
          {
                  
                
                $product_id=$request->product_id;
                $quantity=$request->quantity;
                $user_id=auth()->user()->id;

                $exitProduct=Order::where('user_id',$user_id)->where('product_id',$product_id)->where('cart','1')
                ->where('order','0')->count();
                if($exitProduct==0)
                {
                $product=Product::where('id',$product_id)->first();

                $data['product_id']=$request->product_id;
                $data['category_id']=$product['category_id'];
                $data['subcategory_id']=$product['subcategory_id'];
                $data['product_name']=$product['name'];
                $data['quantity']=$request->quantity;
               
                $data['cart']='1';
                $data['order']='0';
                $data['user_id']=$user_id;

                Order::create($data);
                }
                else
                {
                  Order::where('user_id',$user_id)->where('product_id',$product_id)->where('cart','1')
                  ->where('order','0')->increment('quantity', $quantity);
                
                }
                print_r($data);
                    // return back()->with('success', 'Product Added to Cart!');
          }

          public function cart(Request $request)
          {
            $title = "My cart";
            $user_id=auth()->user()->id;
            $cart=Order::select('orders.id as o_id','orders.product_id','orders.quantity as quant','products.*')
            ->where('orders.user_id',$user_id)
            ->where('orders.cart','1')
            ->where('orders.order','0')
            ->join('products','orders.product_id','products.id')
            ->get();

            $cCount=$cart->count();

           
            return view('home.cart',compact('title','cart','cCount'));
          }
          public function deleteCartProduct(Request $request)
          {
           
            $id=$request->id; 
          
            $delete = Order::where('id',$id)->delete();
      
            if ($delete){
               return ['success' => 1, 'Product Successfully Deleted!'];
                  
                }
                else
                    {
                        return ['success' => 0, 'Error Occured!'];
                 
                    }
          }
          public function updateQuantity(Request $request)
          {
           
            $id=$request->id;
            $data['quantity'] =$request->quantity;
          
            $res = Order::where('id',$id)->update($data);
      
            if ($res){
           return ['success' => 1, 'Product Successfully Updated!'];
                  
                }
                else
                    {
                        return ['success' => 0, 'Error Occured!'];
                 
                    }
          }


//checkout
          public function checkout(Request $request)
          {
            $title = "Checkout";
            $user_id=auth()->user()->id;
            $cart=Order::select('orders.id as o_id','orders.product_id','orders.quantity as quant','products.*')
            ->where('orders.user_id',$user_id)
            ->where('orders.cart','1')
            ->where('orders.order','0')
            ->join('products','orders.product_id','products.id')
            ->get();

            return view('home.checkout',compact('title','cart'));
          }


           function placeOrder(Request $request)
          {
            $product_id=$request->product_id;
            $quantity=$request->quantity;
            $user_id=auth()->user()->id;
            $user_name=auth()->user()->name;
            $user_email=auth()->user()->email;
            $user_mobile=auth()->user()->mobile;
            $user_mobile1=auth()->user()->mobile2;
            $user_company_name=auth()->user()->company_name;
            $user_company_address=auth()->user()->company_address;
            $user_city=auth()->user()->city;
            $user_state=auth()->user()->state;
            $user_country=auth()->user()->country;
            $user_zipcode=auth()->user()->zipcode;
      

            $product=Product::where('id',$product_id)->first();

            $data['product_id']=$request->product_id;
            $data['category_id']=$product['category_id'];
            $data['subcategory_id']=$product['subcategory_id'];
            $data['subsubcategory_id']=$product['subsubcategory_id'];
            $data['product_name']=$product['name'];
            $data['vendor_id']=$product['user_id'];
            $data['vendor_name']=$product['user_name'];
            $data['vendor_email']=$product['user_email'];
            $data['vendor_mobile']=$product['user_mobile'];
            $data['vendor_mobile2']=$product['user_mobile2'];
            $data['vendor_type']=$product['user_type'];
         
            $data['quantity']=$request->quantity;

            $data['cart']='1';
            $data['order']='0';
            $data['user_id']=$user_id;
            $data['user_name']=$user_name;
            $data['user_email']=$user_email;
            $data['user_mobile']=$user_mobile;
            $data['user_mobile1']=$user_mobile1;
            $data['user_company_name']=$user_company_name;
            $data['user_company_address']=$user_company_address;
            $data['user_city']=$user_city;
            $data['user_state']=$user_state;
            $data['user_country']=$user_country;
            $data['user_zipcode']=$user_zipcode;
           

              $data['view']='0';
                // $data['cart']='0';
                $data['order']='1';
                $data['status']='new';
                $data['month']=date('F');
                $data['year']=date('Y');
                $data['created_at']=date('Y-m-d H:i:s');
                $data['updated_at']=date('Y-m-d H:i:s');
                $data['price']=$product['price'];
                $data['currency']=$product['currency'];
                $data['unit']=$product['unit'];
                 
                $data['img']=$product['img']; 

                $order_no="Amivin".rand(1200,1000).rand(500,100000);
                $data['order_no']=$order_no;

                $total_price= $data['price']* $data['quantity'];
                $data['total_price']=$total_price;

           
            
          
       
            $result=Order::create($data);
              // print_r($data);
              // return back()->with('success','Message Successfully Send!');
              return redirect(route('orderHistory'))->with('success','Order Successfully Placed!');
                   
          }
  



          function orderHistory()
          {
                $title = "Order History";
                $user_id=auth()->user()->id;
                $cart=Order::select('orders.*','products.weight','products.unit')->where('orders.user_id',$user_id)
                // ->where('orders.cart','0')
                ->where('orders.order','1')
                ->join('products','orders.product_id','products.id')
                ->orderBy('id','DESC')
                ->get();

                
                return view('home.order-history',compact('title','cart'));

          }
          



          //----------------------Profile-------------------------
          function myProfile()
          {
                $title = "My Profile";
                $id=auth()->user()->id;
                $email=auth()->user()->email;
                $profile=User::where('id',$id)->where('email',$email)->first();

                
                return view('home.my-profile',compact('title','profile'));

          }
          function updateProfile()
          {
                  $this->validate(request(), [
                    'name' => 'required|min:3',
                    'mobile'=>'required'
                ]);
      
                $id=auth()->user()->id;
                $email=auth()->user()->email;

                  $result = User::where('id',$id)->where('email',$email)->update(request(['name','mobile','address_line_1','city','state','zipcode']));
      
                
                return back()->with('success','Profile Successfully Updated!');

          }

          //------------------Passsword change---------




          
          public function editPassword(Request $request)
          {
            $title = "Change Password";
          
            $email=auth()->user()->email;
            $user_type=auth()->user()->user_type;
            
          
              return view('home.auth.password-update',compact('title'));
          }



          public function savePassword(Request $request)
          {
            
            $this->validate(request(), [
              'password' => 'required',
              'password_1' => 'required'
            
          ]);    
          if($request->password !=$request->password_1)
          {
            return back()->with('error','Password not matached!');
          }
         
            if(strlen($request->password)<6)
            {
              return back()->with('error','Password length is less than 6!');
            }
          
          
            $email=auth()->user()->email;
            $user_type=auth()->user()->user_type;

         
            $data['password']= Hash::make($request->password);
            $data['password']=bcrypt($request->password);

           
          
                User::where('email',$email)->update($data);
                
            return redirect()->back()->with('success','Password Successfully Updated!');
          }


          public function searchedProduct(Request $request)
          {
            
            $searched=$request->searched;
          
            $title = $searched;

          
            $products=Product::where('name','like','%'.$searched.'%')->where('status','1')
            
           ->paginate(18);

            $pCount=$products->count();
       //  print_r($products);
         
            return view('home.searched-product',compact('title','searched','products','pCount'));
    
          }



          public function xhome(Request $request) 
          {
            $title = "Amivin Global Exports";
            
              return view('home.xhome',compact('title'));
          }

          public function xabout(Request $request) 
          {
            $title = "Amivin Global Exports";
            
              return view('home.xabout',compact('title'));
          }

     

          public function xrfq(Request $request) 
          {
            $title = "Request for Quotation (RFQ)";
            
              return view('home.xrfq',compact('title'));
          }





          public function xrfqSave(Request $request)
          {
            
      
           //  $data=array();
           
             
              $this->validate(request(), [
                  'product_name' => 'required|min:3',
                  'source_type' =>'required',
                  'source_purpose' =>'required',
                  'price' =>'required',
                  'currency' =>'required',
                  'weight' =>'required', 
                  'unit' =>'required', 
                  'capability' =>'required',
                  'certifications' =>'required',
                  'ship_pay' =>'required',
                  'shipping_method' =>'required',
                  'destination_country' =>'required',
                  'time' =>'required', 
                  'payment_term' =>'required',
                  'trade_terms' =>'required',
                  'details' =>'required',
                  'requirements' =>'required',
                  'name' =>'required',
                  'email' => 'required|email',
                  'mobile' => 'required',
                  'company_name' => 'required',
                
                  'company_address' => 'required',
                  'country' => 'required',
                  'state' => 'required',
                  'city' => 'required',
                  'zipcode' => 'required'
                
              ]); 
            
              $image_name='';
      
              if ($request->hasFile('myImage')) {
                 
                  $file = $request->file('myImage');
                  $extension = $file->getClientOriginalExtension(); // getting image extension
                      if($extension=='png' || $extension=='jpg' || $extension=='jpeg'|| $extension=='.doc'|| $extension=='.docx'|| $extension=='msword'|| $extension=='pdf')
                      {
      
                              $image_name ='users_'.time().'.'.$extension;
                              $destinationPath = public_path('/uploads/rfq');
                              $file->move($destinationPath, $image_name);
                              $data['img']=$image_name;

                              $data['img'];
                              
                      }
                      else
                      {
                          return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                      }
                 
              }
             

      
              // print_r($data);
      
      
              $data1=[
                'product_name' => $request->product_name,
                'source_type' =>$request->source_type,
                'source_purpose' =>$request->source_purpose,
                'price' =>$request->price,
                'currency' =>$request->currency,
                'weight' =>$request->weight,
                'unit' =>$request->unit,
                'capability' =>$request->capability,
                'certifications' =>$request->certifications,
                'ship_pay' =>$request->ship_pay,
                'shipping_method' =>$request->shipping_method,
                'destination_country' =>$request->destination_country,
                'time' =>$request->time, 
                'payment_term' =>$request->payment_term,
                'trade_terms' =>$request->trade_terms,
                'details' =>$request->details,
                'requirements' =>$request->requirements,
                'name' =>$request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'zipcode' => $request->zipcode



                 
              ];
      
          
            $data2=array_merge($data1,$data);
         
      
              $result=Rfq::create($data2);

         

             
      
               // $to = $request->email;
              // $subject = "Youre Request for Quotation (RFQ) is Submitted.";
              // $txt = "Welcome to Amivin global exports !
              
              // name : $request->name .
              // email : $request->email .
        
           
              // Website Link : https://amivin.in ";
          
      
             
              // $headers = "From: amivinaccou22@gmail.com";
             
              
              // mail($to,$subject,$txt,$headers);

              // print_r($data2);
              
             return redirect(route('xrfq'))->with('success', ' Successfully Submitted!');
         
      
          }





          public function xseller(Request $request) 
          {
            $title = "Amivin Global Exports";
            
              return view('home.xseller',compact('title'));
          }

          public function service(Request $request) 
          {
            $title = "Amivin Global Exports";
            
              return view('home.service',compact('title'));
          }
}
