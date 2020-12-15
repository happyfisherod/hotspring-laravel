<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Openhour;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class OpenhourController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }

    public function index()    {
        $openhours = Openhour::orderBy('dayindex')->get();
        $ary_temp1 = array();
        $ary_temp2 = array();
        foreach($openhours as $i => $hour){
            $hour->strday = $this->convertday($hour['dayindex']);
            if($hour->dayindex == 0 )
                array_push($ary_temp1, $hour);
            else
            array_push($ary_temp2, $hour);
        }
        $openhours = $ary_temp2;
        foreach($ary_temp1 as $sunday){
            array_push($openhours, $sunday);
        }

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        return view('admin.pages.openhour',compact('openhours'));
    }
    
    public function addhours()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        return view('admin.pages.addeditopenhours');
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
                'dayindex' => 'required',
                'fromtime' => 'required',
                'endtime' => 'required',
        );
	    
        $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $openhour_obj = Openhour::findOrFail($inputs['id']);

        }else{
            $openhour_obj = new Openhour;

        }
		
		$openhour_obj->dayindex = $inputs['dayindex'];
        $openhour_obj->fromtime = $inputs['fromtime'];
		$openhour_obj->endtime = $inputs['endtime'];
		 
	    $openhour_obj->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }
    }     
    
    public function edithours($id)
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $openhour = Openhour::findOrFail($id);
          
          return view('admin.pages.addeditopenhours', compact('openhour'));
    }	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	
        $openhour = Openhour::findOrFail($id);
        $openhour->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }  
    

    public function convertday($i_day){
        $str_day = '';
        if($i_day == 0)
            $str_day = "Sunday";
        else if($i_day == 1)
            $str_day = "Monday";
        else if($i_day == 2)
            $str_day = "Tuesday";
        else if($i_day == 3)
            $str_day = "Wednesday";
        else if($i_day == 4)
            $str_day = "Thursday";
        else if($i_day == 5)
            $str_day = "Friday";
        else if($i_day == 6)
            $str_day = "Saturday";
        return $str_day;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    }
    	
}
