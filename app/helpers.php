<?php

use App\User; 
use App\Category;
use App\Subcategory; 
use App\Subsubcategory; 
use App\Product;
use App\Vendor;
use App\Order;
use App\Message;
use App\Banner;
use App\Web;
use App\LatestProduct;
use App\HomeProduct;
use App\Course;


//-----------------------------Orders-------------------------------

function allOrders()
{
   $orders=Order::distinct('order_no')->where('order','1')->groupBy('order_no')->count();
   return $orders; 
}

function newOrders()  
{
   $orders=Order::distinct('order_no')->where('order','1')  ->where('status','new')->count();
   return $orders;
}

function processingOrders()
{
   $orders=Order::distinct('order_no')->where('order','1')  ->where('status','processing')->count();
   return $orders;
}

function completedOrders()
{
   $orders=Order::distinct('order_no')->where('order','1') ->where('status','completed')->count();
   return $orders;
}

function cancelledOrders()
{
   $orders=Order::distinct('order_no')->where('order','1')  ->where('status','cancelled')->count();
   return $orders;
}
//-----------------------------Payments-------------------------------
function completedPayments()
{
   $payments=Order::where('order','1')->where('payment','1')->sum('total_price');
   return $payments;
}

function allPayments()
{
   $payments=Order::where('order','1')->sum('total_price');
   return $payments;
}

function newPayments()
{
   $payments=Order::distinct('order_no')->where('order','1')  ->where('status','new')->sum('total_price');
   return $payments;
}

function pendingPayments()
{
   $payments=Order::where('order','1')->where('payment','0')->sum('total_price');
   return $payments;
}


function monthPayments()
{
   $month=date('F');
   $year=date('Y');
   $payments=Order::distinct('order_no')->where('order','1')->where('month',$month)->where('year',$year)->sum('total_price');
   return $payments;
}

function yearPayments()
{
   $month=date('F');
   $year=date('Y');
   $payments=Order::distinct('order_no')->where('order','1')  ->where('year',$year)->sum('total_price');
   return $payments;
}


//--------------Customers--------------------------

function allCustomers()
{
 
   $res=User::where('user_type','user')->count();
   return $res;
}

function newCustomers()
{
   $res=User::where('user_type','user') ->where('created_at','=',date('Y-m-d'))->count();
   return $res;
}


//--------------Messages--------------------------

function allMessages()
{

   $res=Message::count();
   return $res;
}

function newMessages()
{
   $res=Message::where('view','0')->count();
   return $res;
}

//--------------Products, category, Sub-category,subsub-category--------------------------

function products()
{
   
   $res=Product::select('*')->count();
   return $res;
}
function myproducts()
{
 
   $res=Product::where('user_id',auth()->user()->id)->count();
   return $res;
}
function getProduct10($s_id)
{
   
   $res=Product::where('subcategory_id',$s_id)->where('status','1')->where('stock','1')->limit('9')->orderBy('id','desc')->get();
   return $res;
}

function category()
{
   $res=Category::select('*')->count();
   return $res;
}
function vendor()
{
   $res=Vendor::select('*')->count();
   return $res;
}

function subcategory()
{
   $res=Subcategory::select('*')->count();
   return $res;
}
function subsubcategory()
{
   $res=Subsubcategory::select('*')->count();
   return $res;
}
function getCategory()
{
   $res=Category::get();
   return $res;
}
function getCategory10()
{
   $res=Category::limit('10')->get();
   return $res;
}
function getCategory17()
{
   $res=Category::skip(12)->limit('17')->get();
   return $res;
}
function getCategory16()
{
   $res=Category::limit('16')->get();
   return $res;
}
function getCategory29()
{
   $res=Category::limit('29')->get();
   return $res;
}
function getCategory11()
{
   $res=Category::limit('11')->get();
   return $res;
}
function getCategory12()
{
   $res=Category::limit('12')->get();
   return $res;
}
function getCategory8()
{
   $res=Category::limit('8')->get();
   return $res;
}
function getCategory5()
{
   $res=Category::limit('4')->get();
   return $res;
}
function getSubcategory()
{
   $res=Subcategory::get();
   return $res;
}
function getSubcategory10()
{
   $res=Product::limit('9')->orderBy('id','desc')->get();
   return $res;

}
function getSubsubcategory()
{
   $res=Subsubcategory::get();
   return $res;
}
function getSubsubcategory10()
{
   $res=Product::limit('9')->orderBy('id','desc')->get();
   return $res;

}
function getProduct()
{
   $res=Product::where('status','1')->get();
   return $res;
}

function getProductDetails()
{
   $res=Product::get();
   return $res;
}

function banner($b)
{
   $res=Banner::select('name')->where('id',$b)->first();
   return $res['name'];
}

function bannerSubcategory($b)
{
   $res=Banner::select('subcategory_id')->where('id',$b)->first();
   return $res['subcategory_id'];
}
function bannerSubsubcategory($b)
{
   $res=Banner::select('subsubcategory_id')->where('id',$b)->first();
   return $res['subsubcategory_id'];
}


function getWeb()
{
   $res=Web::where('id','1')->first();
   return $res;
}
//-------------cart & order-------------------------

function countCart()
{
   if(isset(auth()->user()->id))
   {
   $res=Order::where('user_id',auth()->user()->id)->where('cart','1')->count();
   return $res;
   }
   else
   {
      $res=0;
      return $res;
   }
  
}

function alreadyInCart($product_id)
{
   if(isset(auth()->user()->id))
   {
   $res=Order::where('user_id',auth()->user()->id)->where('product_id',$product_id)->where('cart','1')
   ->where('order','0')->count();
   return $res;
   }
   else
   {
      $res=0;
      return $res;
   }

  
  
}


function minorder()
{
      $res=Web::select('min_order')->limit('1')->first();
      return $res['min_order'];
}

function myorders()
{
 
   $res=Order::where('vendor_id',auth()->user()->id)->where('order','1')->count();
   return $res;
}
 // ---------------------------Latest Product----------------------------------------//
function getLatestProduct12()
{
   $res=LatestProduct::limit('12')->get();
   return $res;
}

function getLatestProduct10()
{
   $res=LatestProduct::skip(12)->limit('10')->get();
   return $res;
}

 // ---------------------------Home Product----------------------------------------//
 
 function getHomeProductfood()
{
   $res=HomeProduct::limit('12')->get();
   return $res;
}

 function getHomeProductHealth()
{
   $res=HomeProduct::skip(12)->limit('12')->get();
   return $res;
}