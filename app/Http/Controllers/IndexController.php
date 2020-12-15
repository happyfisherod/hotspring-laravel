<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\HotSpring;
use App\Categories;
use App\Menu;
use App\Types;
use App\Review;
use App\Zone;
use App\Openhour;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	 

    public function index()
    { 
    	if(!$this->alreadyInstalled()) {
            return redirect('install');
        }
        
        $hotspring = HotSpring::orderBy('hotspring_name')->get()[0];
        $cats = DB::table('categories')->where('hotspring_id', $hotspring->id)->get();
        $menus = DB::table('menu')->orderBy('regdate', 'DESC')->limit(2)->get();

        $recoms = DB::table('menu')->where('hotspring_id', $hotspring->id)->where('recommended', 'true')->get();

        return view('pages.index',compact('menus', 'cats', 'recoms'));
    }

    public function searchmenu(Request $request){
        $search_menus = DB::table('menu');
        if($request->fea_openair)
            $search_menus = $search_menus->where('fea_openair', $request->fea_openair);
        if($request->fea_towelrental)
            $search_menus->where('fea_towelrental', $request->fea_towelrental);
        if($request->fea_bedrock)
            $search_menus->where('fea_bedrock', $request->fea_bedrock);
        if($request->fea_family)
            $search_menus->where('fea_family', $request->fea_family);
        if($request->fea_massage)
            $search_menus->where('fea_massage', $request->fea_massage);
        if($request->fea_rinse)
            $search_menus->where('fea_rinse', $request->fea_rinse);
        if($request->fea_amenity)
            $search_menus->where('fea_amenity', $request->fea_amenity);
        if($request->fea_parkinglot)
            $search_menus->where('fea_parkinglot', $request->fea_parkinglot);
        if($request->fea_sauna)        
            $search_menus->where('fea_sauna', $request->fea_sauna);
        if($request->fea_towelpurchas)
            $search_menus->where('fea_towelpurchas', $request->fea_towelpurchas);
        if($request->fea_private)
            $search_menus->where('fea_private', $request->fea_private);
        if($request->fea_restaurant)
            $search_menus->where('fea_restaurant', $request->fea_restaurant);
        if($request->fea_shampoo)
            $search_menus->where('fea_shampoo', $request->fea_shampoo);
        if($request->fea_bodysoap)        
            $search_menus->where('fea_bodysoap', $request->fea_bodysoap);
        if($request->fea_restarea)
            $search_menus->where('fea_restarea', $request->fea_restarea);
        if($request->facilityname)
            $search_menus->where('name', 'LIKE', '%' . $request->facilityname . '%');
        if($request->prefecture)
            $search_menus->where('prefecture', $request->prefecture);
        $search_menus = $search_menus->get();        
        if( isset($search_menus) && count($search_menus) >= 1 )
            return json_encode(array('info'=>true, 'data'=> $search_menus));
        else
            return json_encode(array('info'=>false));
    }
    
    public function about_us()
    {    
        return view('pages.about');
    }

    public function contact_us()
    {        
        return view('pages.contact');
    }

    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }

    /**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
     
     public function login()
    { 
        
        // date_default_timezone_set('Europe/Moscow');
        $dayindex = date('w');
        $curtime = date('G:i:s');
        $data = Openhour::get_daydata($dayindex);
        $openinfo = true;
        if(!isset($data) || $data['fromtime'] > $curtime || $curtime > $data['endtime']){
           $openinfo = false;
        }
        return view('pages.login', compact('openinfo'));
    }

    /**
     * 
     */
    public function forgotpassword(){
        return view('pages.forgotpassword');
    }

    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

         
        
         if (Auth::attempt($credentials, $request->has('remember'))) {

            if(Auth::user()->usertype=='banned'){
                \Auth::logout();
                return array("errors" => 'You account has been banned!');
            }

            return $this->handleUserWasAuthenticated($request);
        }

       return redirect('/login')->withErrors('The email or the password is invalid. Please try again.');
        
    }


    public function postforgotpassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $user = User::where("email", $request['email'])->first();
        if(isset($user)){
            $strlink = base64_encode ( $user['id'] . '_' . date("Y/m/d") );
            
            $data = array(
                'token' => $strlink
            );

            $subject="Changing password";
            
            $user_order_email=$request['email'];
            
            // \Mail::send('emails.chang_password', $data, function ($message) use ($subject,$user_order_email){

            //     $message->from(getcong('site_email'), getcong('site_name'));

            //     $message->to($user_order_email)->subject($subject);
            // });
            \Session::flash('flash_message', 'Sended the changable link to your email successfully. Please check it...');
            return \Redirect::back();
        }else
            return redirect('forgotpassword')->withErrors('This email is not registered. Please try again.');
        
    }
    
     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request)
    {

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }
        return redirect('/profile'); 
    }
    
    
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        \Session::flash('flash_message', 'Logout successfully...');

        return redirect('/login');
    }


    public function register()
    { 
                   
        return view('pages.register');
    }

    public function register_user(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|max:75|unique:users',
                'password' => 'required|min:3|confirmed'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
       
        $user = new User;

        
        $user->usertype = $inputs['usertype'];
        $user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];       
        $user->email = $inputs['email'];         
        $user->password= bcrypt($inputs['password']); 
       
         
        $user->save();
        
       

            \Session::flash('flash_message', 'Register successfully...');

            return \Redirect::back();

         
    }    

    public function profile()
    { 
        if(!Auth::check())
            return redirect('login');
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);

        //return view('pages.profile',compact('user'));
        //jin
        return view('pages.mypage',compact('user'));
    } 
    

    public function editprofile(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        
            $rule=array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|max:75',
                'mobile' => 'required',
                'city' => 'required',
                'postal_code' => 'required',
                'address' => 'required'
                 );
       
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
        $user_id=Auth::user()->id;
           
        $user = User::findOrFail($user_id);
 
         
        
        $user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];       
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->city = $inputs['city'];
        $user->postal_code = $inputs['postal_code'];
        $user->address = $inputs['address'];         
         
         
        $user->save();
        
         
            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
         
         
    }        

    public function change_password()
    { 
        if(!Auth::check())
            return redirect('login');
        return view('pages.change_password');
    }

    public function edit_password(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(                
                'password' => 'required|min:3|confirmed'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
        $forgot_id = explode('_', base64_decode($inputs['info']))[0];
        if(!isset(Auth::user()->id)){
            $user = User::findOrFail($forgot_id);
            if($user->usertype == "Admin"){
                return redirect()->back()->withErrors("Can't change administrator password!");
            }    
        }
        $user_id=isset(Auth::user()->id) ? Auth::user()->id : $forgot_id;
        
        $user = User::findOrFail($user_id);
       
        $user->password= bcrypt($inputs['password']);  
        
         
        $user->save(); 

            \Session::flash('flash_message', 'Password has been changed...');

            return \Redirect::back();

         
    } 


    public function contact_send(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(                
                'name' => 'required',
                'email' => 'required|email|max:75'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
            $data = array(
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'phone' => $inputs['phone'],
            'subject' => $inputs['subject'],
            'user_message' => $inputs['message'],
             );

            $subject=$inputs['subject'];

            \Mail::send('emails.contact', $data, function ($message) use ($subject){

                $message->from(getcong('site_email'), getcong('site_name'));

                $message->to(getcong('site_email'))->subject($subject);

            });
        

            \Session::flash('flash_message', 'Thank You. Your Message has been Submitted.');

            return \Redirect::back();

         
    }    

    public function validzone_search(Request $request){
        $val = $request['searchval'];
        $findzones = Zone::where('city', '=', $val)->orWhere('postcode', '=', $val)->get();
        if( isset($findzones) && count($findzones) >= 1 )
            return json_encode(array('info'=>true, 'data'=> $findzones[0]));
        else
            return json_encode(array('info'=>false));
    }
}
