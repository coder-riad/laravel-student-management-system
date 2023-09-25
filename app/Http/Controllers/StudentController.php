<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassList;
use App\Section;
use App\Student;
use Carbon\Carbon;
use Image;

class StudentController extends Controller
{
    
	function __construct()
    {
        $this->middleware('auth');
    }
    function studentview(){
      $students=Student::where('student_status',1)->orderBy('section_id')->orderBy('roll')->get();
      $classlists=ClassList::all();
      $sections=Section::all();
    	return view('student/view',compact('students','classlists','sections'));
    }
    function studentadd(){
      $classlists=ClassList::all();
      $students=Student::all();
      $sections=Section::all();
    	return view('student/add',compact('classlists','sections','students'));

    }
    function studentaddinsert(Request $request){
        $request->validate([
          'fathers_mobile'=>'required|numeric|max:09999999999',
          'mothers_mobile'=>'numeric|max:09999999999',
          ]);
       $lastinsertedid = Student::insertGetId([
               'student_name'=>$request->student_name,
               'gender'=>$request->gender,
               'date_of_birth'=>$request->date_of_birth,
               'blood_group'=>$request->blood_group,
               'religion'=>$request->religion,
               'fathers_name'=>$request->fathers_name,
               'fathers_mobile'=>$request->fathers_mobile,
               'mothers_name'=>$request->mothers_name,
               'mothers_mobile'=>$request->mothers_mobile,
               'present_address'=>$request->present_address,
               'permanent_address'=>$request->permanent_address,
               'class_name'=>$request->class_name,
               'section_id'=>$request->section_id,
               'group'=>$request->group,
               'roll'=>$request->roll,
               'registration'=>$request->registration,
               'created_at'=>Carbon::now(),
            ]);
        if($request->hasFile('student_image')){
            $main_photo=$request->student_image;
            $imagename=$lastinsertedid.".".$main_photo->getClientOriginalExtension();
            Image::make($main_photo)->resize(400,400)->save(base_path('public/uploads/student_images/'.$imagename));
            Student::find($lastinsertedid)->update([
            'student_image'=>$imagename,
            ]);
        }
        return redirect('student/view');        
    }

    function studentdelete($student_id){
      Student::find($student_id)->delete();
      return back();
    }

    function studentsingleview($id){
      $classlists=ClassList::all();
      $sections=Section::all();      
      $single=Student::where('id',$id)->findOrFail($id);     
      return view('student/singleview',compact('single','sections','classlists'));
    }

    function studentedit($student_id){
      $classlists=ClassList::all();
      $edit_info=Student::findOrFail($student_id);
      $sections=Section::all();
      return view('student/edit',compact('classlists','sections','edit_info'));
    }

    function studenteditinsert(Request $request){
      $request->validate([
          'fathers_mobile'=>'numeric|max:09999999999',
          'mothers_mobile'=>'numeric|max:09999999999',
          ]);
      Student::find($request->student_id)->update([
               'student_name'=>$request->student_name,
               'gender'=>$request->gender,
               'date_of_birth'=>$request->date_of_birth,
               'blood_group'=>$request->blood_group,
               'religion'=>$request->religion,
               'fathers_name'=>$request->fathers_name,
               'fathers_mobile'=>$request->fathers_mobile,
               'mothers_name'=>$request->mothers_name,
               'mothers_mobile'=>$request->mothers_mobile,
               'present_address'=>$request->present_address,
               'permanent_address'=>$request->permanent_address,
               'class_name'=>$request->class_name,
               'section_id'=>$request->section_id,
               'group'=>$request->group,
               'roll'=>$request->roll,
               'registration'=>$request->registration,
               'created_at'=>Carbon::now(),   
        ]);

        if($request->hasFile('student_image')){
            if(Student::find($request->student_id)->student_image != 'defaultstudentimage.jpg'){
              $nameToDelete = Student::find($request->student_id)->student_image;
              unlink(base_path('public/uploads/student_images/'.$nameToDelete));
            }
            $main_photo=$request->student_image;
            $imagename=$request->student_id.".".$main_photo->getClientOriginalExtension();
            Image::make($main_photo)->resize(400,400)->save(base_path('public/uploads/student_images/'.$imagename));
            Student::find($request->student_id)->update([
            'student_image'=>$imagename,
            ]);          
          }

    return redirect('student/view');
    }    

}
