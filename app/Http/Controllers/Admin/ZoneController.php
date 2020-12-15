<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Zone;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class ZoneController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function zonelist()    { 
        
              
        $zonelist = Zone::orderBy('id')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         
        return view('admin.pages.zone',compact('zonelist'));
    }

    public function addzone()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        return view('admin.pages.addeditzone');
    }

    public function editzone($id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $zone = Zone::findOrFail($id);
          
          return view('admin.pages.addeditzone',compact('zone'));
        
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
                'postcode' => 'required',
                'city' => 'required',
                'amount' => 'required',         
        );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $zone_obj = Zone::findOrFail($inputs['id']);

        }else{

            $zone_obj = new Zone;

        }
		
        $zone_obj->postcode = $inputs['postcode']; 
        $zone_obj->city = $inputs['city']; 
        $zone_obj->amount = $inputs['amount']; 
		 
	    $zone_obj->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }
    
    public function delete($id)
    {
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	
        $zone = Zone::findOrFail($id);
        $zone->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function validzone(Request $request)
    {
        $params = $request->all();
        if(isset($params['city']))
            $findzones = Zone::where('city',$params['city'])->get();
        else if(isset($params['postcode']))
            $findzones = Zone::where('postcode',$params['postcode'])->get();
        if( isset($findzones) && count($findzones) >= 1 )
            return json_encode(array('info'=>true, 'data'=> $findzones[0]));
        else
            return json_encode(array('info'=>false));
    }

    public function validzone_search(Request $request)
    {
        $val = $request['searchval'];
        $findzones = Zone::where('city', $val)->orWhere('postcode', $val)->get();
        if( isset($findzones) && count($findzones) >= 1 )
            return json_encode(array('info'=>true, 'data'=> $findzones[0]));
        else
            return json_encode(array('info'=>false));
    }
    	
}
