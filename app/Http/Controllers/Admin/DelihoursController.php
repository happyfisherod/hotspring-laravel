<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Delihours;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class DelihoursController extends MainAdminController
{
    public function __construct()
    {
         $this->middleware('auth');
          
        parent::__construct();  
          
    }

    public function delihours()    { 
        
        $delihours = Delihours::orderBy('dayindex')->get();
        $ary_temp1 = array();
        $ary_temp2 = array();
        foreach($delihours as $i => $hour){
            $hour->strday = $this->convertday($hour['dayindex']);
            if($hour->dayindex == 0 )
                array_push($ary_temp1, $hour);
            else
            array_push($ary_temp2, $hour);
        }
        $delihours = $ary_temp2;
        foreach($ary_temp1 as $sunday){
            array_push($delihours, $sunday);
        }

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         
        return view('admin.pages.delihours',compact('delihours'));
    }
    
    public function addhours()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        return view('admin.pages.addeditdelihours');
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
           
            $delihour_obj = Delihours::findOrFail($inputs['id']);

        }else{

            $delihour_obj = new Delihours;

        }
        
        $delihour_obj->dayindex = $inputs['dayindex'];
        $delihour_obj->fromtime = $inputs['fromtime'];
        $delihour_obj->endtime = $inputs['endtime'];
         
        $delihour_obj->save();
        
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
                 
          $delihour = delihours::findOrFail($id);
          
          return view('admin.pages.addeditdelihours',compact('delihour'));
        
    }    
    
    public function delete($id)
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
            
        $delihour = delihours::findOrFail($id);
        $delihour->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function getdelitime(Request $request){
        $today = date('Y-m-d');
        $todaytime = date('H:i');
        $inttodaytime = strtotime('2020-01-01' . $todaytime);
        $seldate = date($request['seldate']);
        $timestamp = strtotime($request['seldate']);
        $opvalues = array();
        if(strtotime($today) > strtotime($seldate))
            return json_encode($opvalues);
        $day = date('w', $timestamp);
        $delitimes = Delihours::where('dayindex', '=', $day)->orderBy('fromtime')->get();
        foreach($delitimes as $delitime){
            $ftime = strtotime('2020-01-01' . $delitime->fromtime);
            $etime = strtotime('2020-01-01' . $delitime->endtime);
            $curtime = $ftime;
            $step = 30 * 60;
            $bequal = false;
            
            while($curtime <= $etime){
                if($curtime == $etime)
                $bequal = true;
                $oldtime = $curtime;
                $curtime = $curtime + $step;
                if(strtotime($today) == strtotime($seldate)){
                    if($oldtime <= $inttodaytime)
                        continue;
                }
                array_push($opvalues, date("H:i", $oldtime) . '~' . date("H:i", $curtime));
            }
            if(!$bequal)
                array_push($opvalues, date("H:i", $curtime) . '~' . date("H:i", $etime));
        }
        return json_encode($opvalues);
    }

    public function validtime(Request $request)
    {
        $params = $request->all();

        $results = Delihours::where('dayindex', '=', $params['dayindex'])
                            ->where("fromtime", '<=', $params['delitime'])
                            ->where("endtime", '>=', $params['delitime'])
                            ->get();
        if( isset($results) && count($results) >= 1 ){
            $res = array('info'=>true, 'detail'=>'');
        }else{
            $results = Delihours::where('dayindex', '=', $params['dayindex'])->get();
            $strcontent = '';
            if( isset($results) && count($results) >= 1 ){
                foreach($results as $i => $row){
                    if($i != 0)
                        $strcontent .= " / ";
                    $strcontent .= $row->fromtime . '~' . $row->endtime; 
                }
                $res = array('info'=>false, 'detail'=>$strcontent);
            }else{
                $res = array('info'=>false, 'detail'=>  'Close on ' . $this->convertday($params['dayindex']));  
            }
        }
        return json_encode($res);
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
