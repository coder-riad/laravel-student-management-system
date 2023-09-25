<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassList;

class ClassController extends Controller
{
    
    function __construct()
    {
        $this->middleware('auth');
    }
    
    function classview()
    {
    	$classlists = ClassList::all();
    	return view('class/view', compact('classlists'));
    }
 //Class view & insert
    function classadd(){
    	return view('class/add');

    }

    function classinsert(Request $request){
        $request->validate([
                'class_name' =>"required",
                'class_code' =>"required",
            ]);
    	ClassList::insert([
    			'class_name' => $request->class_name,
    			'class_code' => $request->class_code,
    		]);
    	return back();
    }
//end class view & insert

    function classdelete($class_id){    	
    	ClassList::find($class_id)->delete();
    	return back();
    }
    
    function classedit($class_id){    	
    	$class_info = ClassList::findOrFail($class_id);
    	return view('class/edit',compact('class_info'));
    }

    function classeditinsert(Request $request){
    	ClassList::find($request->class_id)->update([
    		'class_name' => $request->class_name,
    		'class_code' => $request->class_code,	
    		]);
    	return redirect('class/view');
    }
}
