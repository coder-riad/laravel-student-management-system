<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassList;
use App\Section;
class SectionController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function sectionview(){
    	$sections = Section::all();
    	return view('section/view',compact('sections'));
    }
    //ClassList Model Using
    function sectionadd(){
    	$classlists = ClassList::all();
    	return view('section/add',compact('classlists'));
    }
    //end ClassList Model Using
    function sectioninsert(Request $request){
    	Section::insert([
    		'class_id'=>$request->class_id,
    		'section_name'=>$request->section_name,
    		'room_no'=>$request->room_no,
    		]);
    	return back();
    }
    function sectiondelete($section_id){
    	Section::find($section_id)->delete();
    	return back();
    }

    //updating
    function sectionedit($section_id){
    	$classlists = ClassList::all();
    	$section_info = Section::findOrFail($section_id);
    	return view('section/edit',compact('section_info','classlists'));
   }
   function sectioneditinsert(Request $request){
        Section::find($request->section_id)->update([
    		'class_id'=>$request->class_id,
            'section_name'=>$request->section_name,
            'room_no'=>$request->room_no,
    		]);
    	return redirect('section/view');
   }
}
