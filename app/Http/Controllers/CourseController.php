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


use App\Http\Requests;
class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $title = "Course";
      $subtitle="Course";
      $activePage = "Course";
      $cCount=Course::select('*')->count();
      $courses=Course::select('courses.*')
         ->orderBy('id','DESC')
      ->sortable()->paginate(20);
        return view('admin.courses.list',compact('title','courses','activePage','subtitle','cCount'));
    }
  
    
  
    public function create()
    {
        $title = "Create New Course";
        $subtitle="Course";
        $activePage = "Course"; 
          return view('admin.courses.add',compact('title','activePage','subtitle'));
    }
  
    
    public function save(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'topic' => 'required',
            'sort_details' => 'required',
            'details' => 'required',
            'available' => 'required',
            'seats' => 'required'
           

         
          
        ]);    
        
          
        $image_name='';

        if ($request->hasFile('myImage')) {
            $file = $request->file('myImage');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {

                        $image_name ='courses_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/courses');
                        $file->move($destinationPath, $image_name);
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }

        $data=[
            'name' => $request->name,
            'topic' => $request->topic,
            'sort_details' => $request->sort_details,
            'details' => $request->details,
            'available' => $request->available,
            'seats' => $request->seats,
            'img' =>  $image_name
           
        ];

        $result=Course::create($data);
        return redirect(route('courses.list'))->with('success', 'Course Successfully Added!');
    }
    
    public function edit(Request $request, $id)
    {
        $title = "Update Course";
        $subtitle="Course";
        $activePage = "Course";
        $courses=Course::where('id',$id)->first();
          return view('admin.courses.edit',compact('title','courses','activePage','subtitle','id'));
    }
  
    
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'topic' => 'required',
            'sort_details' => 'required',
            'details' => 'required',
            'available' => 'required',
            'seats' => 'required'
          
        ]);   
        
        $image_name='';

    if ($request->hasFile('myImage')) {
        $file = $request->file('myImage');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
        {

                $image_name ='courses_'.time().'.'.$extension;
                $destinationPath = public_path('/uploads/courses');
                $file->move($destinationPath, $image_name);
        }
        else
        {
            return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
        }

        

        $data=[
            'name' => $request->name,
            'topic' => $request->topic,
            'sort_details' => $request->sort_details,
            'details' => $request->details,
            'available' => $request->available,
            'seats' => $request->seats,
            'img' =>  $image_name,
            
            'updated_at'=>date('Y-m-d H:i:s')
        ];
       
    }else
    {
        $data=[
            'name' => $request->name,
            'topic' => $request->topic,
            'sort_details' => $request->sort_details,
            'details' => $request->details,
            'available' => $request->available,
            'seats' => $request->seats,
            'updated_at'=>date('Y-m-d H:i:s')
        ];
    }

    $result=Course::where('id',$id)->update($data);
    return redirect(route('courses.list'))->with('success', 'Course Successfully Updated!');
    }

    
    public function destroy(Request $request)
    {
        $id=$request->id; 
 
        
        $delete = Course::where('id', $id)->delete();
        if ($delete){
    
               
              return ['success' => 1, 'Course Successfully Deleted!'];
              
            }
            else
                {
                    return ['success' => 0, 'Error Occured!'];
             
                }
     
    }
}
