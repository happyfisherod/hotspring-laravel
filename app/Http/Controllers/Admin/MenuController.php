<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Menu;
use App\Categories;
use App\HotSpring;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class MenuController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function menulist($id)    { 
        
              
        $menu = Menu::where("hotspring_id", $id)->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

        $hotspring_id=$id;
         
        return view('admin.pages.menu',compact('menu','hotspring_id'));
    }
    
    public function addeditmenu($id)    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

        $categories = Categories::where("hotspring_id", $id)->get();

        $hotspring_id=$id;

        return view('admin.pages.addeditmenu',compact('categories','hotspring_id'));
    }
    
    public function addnew(Request $request)
    { 
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'name' => 'required',
                'urlname' => 'required'	         
        );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request;
		
		if(!empty($inputs['id'])){
           
            $menu = Menu::findOrFail($inputs['id']);

        }else{

            $menu = new Menu;

        }
		
        //Logo image
        $menu_image = $request->file('menu_image');
         
        if($menu_image){
            
             \File::delete(public_path() .'/upload/menu/'.$menu->menu_image.'-b.jpg');
            \File::delete(public_path() .'/upload/menu/'.$menu->menu_image.'-s.jpg');
            
            $tmpFilePath = 'upload/menu/';          
            $Tmpname  = preg_replace('/\s+/', '', 'menus');
            $hardPath = substr($Tmpname,0,100).'_'.time();
            
            $img = Image::make($menu_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(240, 240)->save($tmpFilePath.$hardPath. '-s.jpg');

            $menu->image = $hardPath;
             
        }
		 
		$menu->hotspring_id = $inputs['hotspring_id'];
        // $menu->menu_cat = $inputs['menu_cat'];
        $menu->name = $inputs['name'];
        $menu->urlname = $inputs['urlname'];
        $menu->grownprice = $inputs['grownprice'];
        $menu->youngprice = $inputs['youngprice'];
        $menu->childprice = $inputs['childprice'];
        $menu->openhour = $inputs['openhour'];
        $menu->closehour = $inputs['closehour'];
        $menu->streetaddress = $inputs['streetaddress'];
        $menu->phonenumber = $inputs['phonenumber'];
        $menu->prefecture = $inputs['prefecture'];
        $menu->lodging = $inputs['lodging'];
        $menu->municipality = $inputs['municipality'];
        $menu->fea_openair = $inputs['fea_openair'] == 'on' ? 1 : 0; 
        $menu->fea_towelrental = $inputs['fea_towelrental'] == 'on' ? 1 : 0;
        $menu->fea_bedrock = $inputs['fea_bedrock'] == 'on' ? 1 : 0; 
        $menu->fea_family = $inputs['fea_family'] == 'on' ? 1 : 0; 
        $menu->fea_massage = $inputs['fea_massage'] == 'on' ? 1 : 0; 
        $menu->fea_rinse = $inputs['fea_rinse'] == 'on' ? 1 : 0; 
        $menu->fea_amenity = $inputs['fea_amenity'] == 'on' ? 1 : 0; 
        $menu->fea_parkinglot = $inputs['fea_parkinglot'] == 'on' ? 1 : 0; 
        $menu->fea_sauna = $inputs['fea_sauna'] == 'on' ? 1 : 0;
        $menu->fea_towelpurchas = $inputs['fea_towelpurchas'] == 'on' ? 1 : 0;
        $menu->fea_private = $inputs['fea_private'] == 'on' ? 1 : 0;
        $menu->fea_restaurant = $inputs['fea_restaurant'] == 'on' ? 1 : 0;
        $menu->fea_shampoo = $inputs['fea_shampoo'] == 'on' ? 1 : 0;
        $menu->fea_bodysoap = $inputs['fea_bodysoap'] == 'on' ? 1 : 0;
        $menu->fea_restarea = $inputs['fea_restarea'] == 'on' ? 1 : 0;

        if(!$menu->regdate || '0000-00-00')
            $menu->regdate = date('Y-m-d');
		 
	    $menu->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }
    }     
    
    public function editmenu($id,$menu_id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
          


          $menu = Menu::findOrFail($menu_id);
          
          $categories = Categories::where("hotspring_id", $id)->get();

          $hotspring_id=$id;

          return view('admin.pages.addeditmenu',compact('menu','categories','hotspring_id'));
        
    }	 
    
    public function delete($menu_id)
    {
         
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Owner")
        {
 
             $menu = Menu::findOrFail($menu_id);
            $menu->delete();

            \Session::flash('flash_message', 'Deleted');

            return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        
        }

    }

    public function owner_menu()    
    { 
        
        
        $user_id=Auth::User()->id;

        $hotspring= HotSpring::where('user_id',$user_id)->first();

        $hotspring_id=$hotspring['id'];

        $menu = Menu::where("hotspring_id", $hotspring_id)->orderBy('menu_cat')->get();
        
        // if(Auth::User()->usertype!="Owner"){

        //     \Session::flash('flash_message', 'Access denied!');

        //     return redirect('admin/dashboard');
            
        // }

 
        return view('admin.pages.owner.menu',compact('menu','hotspring_id'));
   
    }

    public function owner_addeditmenu()    { 

        // if(Auth::User()->usertype!="Owner"){

        //     \Session::flash('flash_message', 'Access denied!');

        //     return redirect('admin/dashboard');
            
        // }

        $user_id=Auth::User()->id;

        $hotspring= HotSpring::where('user_id',$user_id)->first();

        $hotspring_id=$hotspring['id'];

        $categories = Categories::where("hotspring_id", $hotspring_id)->get();

         

        return view('admin.pages.owner.addeditmenu',compact('categories','hotspring_id'));
    }
    
    public function owner_editmenu($menu_id)    
    {     
    
        //   if(Auth::User()->usertype!="Owner"){

        //     \Session::flash('flash_message', 'Access denied!');

        //     return redirect('admin/dashboard');
            
        // }
          
        $user_id=Auth::User()->id;

        $hotspring= HotSpring::where('user_id',$user_id)->first();

        $hotspring_id=$hotspring->id;

          $menu = Menu::findOrFail($menu_id);
          
          $categories = Categories::where("hotspring_id", $hotspring_id)->get();

           

          return view('admin.pages.owner.addeditmenu',compact('menu','categories','hotspring_id'));
        
    } 
    	
}
