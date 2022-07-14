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
use App\Http\Requests;
use App\User; 
use App\Category; 

class ApiController extends Controller
{
    public function category(Request $request)
    {
        
        $response['brands']= Category::all();
        $response['status']="Success";
        $response['message']="Success";

        return $response;


    }



 
    public function test(Request $request)
    {
      
        $name=$request->post("name");
     

        $data=[
            'name' => $request->name
         
        ];

        return Category::create( $data);
// $response['id']=$id;
echo $data;
$response['message']="Success";


    }

    public function save(Request $request)
    {
        
        $response['categoty']= Category::all();
        $response['status']="Success";
        $response['message']="Success";

        return $response;


    }
    
}

