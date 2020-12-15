<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE , ANY');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization , accept');
header('Access-Control-Allow-Credentials: true');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
	Route::get('/', 'IndexController@index');
	
	Route::post('login', 'IndexController@postLogin');
	Route::get('logout', 'IndexController@logout');
	 
	Route::get('dashboard', 'DashboardController@index');
	
	Route::get('profile', 'AdminController@profile');	
	Route::post('profile', 'AdminController@updateProfile');	
	Route::post('profile_pass', 'AdminController@updatePassword');
	
	Route::get('settings', 'SettingsController@settings');	
	Route::post('settings', 'SettingsController@settingsUpdates');	
	Route::post('homepage_settings', 'SettingsController@homepage_settings');	
	Route::post('addthisdisqus', 'SettingsController@addthisdisqus');	
	Route::post('headfootupdate', 'SettingsController@headfootupdate');

	 
	Route::get('types', 'TypesController@types');	
	Route::get('types/addtype', 'TypesController@addeditType'); 
	Route::get('types/addtype/{id}', 'TypesController@editType');	
	Route::post('types/addtype', 'TypesController@addnew');	
	Route::get('types/delete/{id}', 'TypesController@delete');


	Route::get('hotspring', 'HotSpringController@hotspring');	
	Route::get('hotspring/addeditcustom', 'HotSpringController@addeditcustom'); 
	Route::post('hotspring/savecustom', 'HotSpringController@savecustom');
	Route::get('hotspring/addrestaurant', 'HotSpringController@addeditrestaurant'); 
	Route::get('hotspring/addrestaurant/{id}', 'HotSpringController@editrestaurant');	
	Route::post('hotspring/addrestaurant', 'HotSpringController@addnew');	
	Route::get('hotspring/delete/{id}', 'HotSpringController@delete');
	Route::get('hotspring/view/{id}', 'HotSpringController@restaurantview');	
	
	Route::get('hotspring/view/{id}/categories', 'CategoriesController@categories');
	Route::get('hotspring/view/{id}/categories/addcategory', 'CategoriesController@addeditCategory'); 
	Route::get('hotspring/view/{id}/categories/addcategory/{cat_id}', 'CategoriesController@editCategory');	
	Route::post('hotspring/view/{id}/categories/addcategory', 'CategoriesController@addnew');
	Route::get('hotspring/view/{id}/categories/delete/{cat_id}', 'CategoriesController@delete'); 
	
	Route::get('hotspring/view/{id}/menu', 'MenuController@menulist');
	Route::get('hotspring/view/{id}/menu/addmenu', 'MenuController@addeditmenu'); 
	Route::get('hotspring/view/{id}/menu/addmenu/{menu_id}', 'MenuController@editmenu');	
	Route::post('hotspring/view/{id}/menu/addmenu', 'MenuController@addnew');
	Route::get('hotspring/view/{id}/menu/delete/{menu_id}', 'MenuController@delete');

	Route::get('hotspring/view/{id}/orderlist', 'OrderController@orderlist');
	Route::get('hotspring/view/{id}/orderlist/{order_id}/{status}', 'OrderController@order_status');
	Route::get('hotspring/view/{id}/orderlist/{order_id}', 'OrderController@delete');

	Route::get('hotspring/view/{id}/review', 'HotSpringController@reviewlist');

	Route::get('allorder', 'OrderController@alluser_order');

	//Owner
	Route::get('myhotspring', 'HotSpringController@my_hotspring');

	Route::get('categories', 'CategoriesController@owner_categories');		
	Route::get('categories/addcategory', 'CategoriesController@owner_addeditCategory'); 
	Route::get('categories/addcategory/{cat_id}', 'CategoriesController@owner_editCategory');	
	Route::post('categories/addcategory', 'CategoriesController@addnew');
	Route::get('categories/delete/{cat_id}', 'CategoriesController@delete');

	Route::get('menu', 'MenuController@owner_menu');
	Route::get('menu/addmenu', 'MenuController@owner_addeditmenu'); 
	Route::get('menu/addmenu/{menu_id}', 'MenuController@owner_editmenu');	
	Route::post('menu/addmenu', 'MenuController@addnew');
	Route::get('menu/delete/{menu_id}', 'MenuController@delete'); 

	Route::get('orderlist', 'OrderController@owner_orderlist');
	Route::get('orderlist/{order_id}/{status}', 'OrderController@owner_order_status');
	Route::get('orderlist/{order_id}', 'OrderController@owner_delete');

	Route::get('reviews', 'HotSpringController@owner_reviewlist');

	Route::get('chatlist', 'ChatController@owner_orderlist');

	Route::get('users', 'UsersController@userslist');	
	Route::get('users/adduser', 'UsersController@addeditUser');	
	Route::post('users/adduser', 'UsersController@addnew');	
	Route::get('users/adduser/{id}', 'UsersController@editUser');	
	Route::get('users/delete/{id}', 'UsersController@delete');	

	Route::get('deliveryzone', 'ZoneController@zonelist');
	Route::post('deliveryzone/addzone', 'ZoneController@addnew');
	Route::get('deliveryzone/addzone', 'ZoneController@addzone');
	Route::get('deliveryzone/editzone/{id}', 'ZoneController@editzone');
	Route::get('deliveryzone/delete/{id}', 'ZoneController@delete');
	Route::post('deliveryzone/validzone', 'ZoneController@validzone');
	Route::post('deliveryzone/validzone_search', 'ZoneController@validzone_search');

	Route::get('deliveryhours', 'DelihoursController@delihours');
	Route::post('deliveryhours/addhours', 'DelihoursController@addnew');
	Route::get('deliveryhours/addhours', 'DelihoursController@addhours');
	Route::get('deliveryhours/edithours/{id}', 'DelihoursController@edithours');
	Route::get('deliveryhours/delete/{id}', 'DelihoursController@delete');
	Route::post('deliveryhours/validtime', 'DelihoursController@validtime');
	Route::post('deliveryhours/getdelitime', 'DelihoursController@getdelitime');

	Route::get('openhours', 'OpenhourController@index');
	Route::post('openhours/addhours', 'OpenhourController@addnew');
	Route::get('openhours/addhours', 'OpenhourController@addhours');
	Route::get('openhours/edithours/{id}', 'OpenhourController@edithours');
	Route::get('openhours/delete/{id}', 'OpenhourController@delete');
	Route::post('openhours/validtime', 'OpenhourController@validtime');
	
	Route::get('widgets', 'WidgetsController@index');	
	Route::post('footer_widgets', 'WidgetsController@footer_widgets');
	Route::post('about_widgets', 'WidgetsController@about_widgets');	
	Route::post('socialmedialink', 'WidgetsController@socialmedialink');	
	Route::post('need_help', 'WidgetsController@need_help');	
	Route::post('featuredpost', 'WidgetsController@featuredpost');	
	Route::post('advertise', 'WidgetsController@advertise');
	
});


// API Routes-------------------------------------------------------------------

Route::group( ['prefix' => 'api/v1'], function () {
	Route::post('userRegister', 'ApiController@userRegister');
	Route::post('updateuser', 'ApiController@updateUser');
	Route::post('userLogin', 'ApiController@userLogin'); 
	Route::post('socialLogin', 'ApiController@socialLogin'); 
	Route::get('userbyid/{id}', 'ApiController@userbyid');
	Route::get('restaurent_types', 'ApiController@Restaurent_Type');
	Route::get('restaurentbyid/{id}', 'ApiController@RestaurentById');
	Route::post('restaurents', 'ApiController@Restaurents');
	Route::get('restaurents_menus/{id}', 'ApiController@RestaurentDishes'); 
	Route::post('restaurents_order_create', 'ApiController@CreateOrder'); 
	Route::get('my_orders/{id}', 'ApiController@User_Orders'); 
	Route::post('cancel_order', 'ApiController@Cancel_Order'); 
	Route::post('user_chats_restrau', 'ApiController@User_Chats_Restrau'); 
	Route::post('send_msg', 'ApiController@Send_msg');
	Route::post('forgot', 'ApiController@forgotPassword');
});

// API Routes-------------------------------------------------------------------
Route::get('language/{lang}','HomeController@language');

Route::get('/', 'IndexController@index');

Route::get('login', 'IndexController@login');
Route::get('forgotpassword', 'IndexController@forgotpassword');

Route::post('login', 'IndexController@postLogin');
Route::post('forgotpassword', 'IndexController@postforgotpassword');

Route::get('register', 'IndexController@register');

Route::post('register', 'IndexController@register_user');

Route::get('logout', 'IndexController@logout');

Route::get('profile', 'IndexController@profile');

Route::post('profile', 'IndexController@editprofile');

Route::get('change_pass', 'IndexController@change_password');

Route::post('validzone_search', 'IndexController@validzone_search');


Route::post('searchmenu', 'IndexController@searchmenu'); 


Route::get('ch_forgot_pass/{info}', function ($info)  
{      
	return view ('pages.ch_forget_password', compact('info'));  
});  

Route::post('change_pass', 'IndexController@edit_password');


Route::get('about', 'IndexController@about_us');

Route::get('contact', 'IndexController@contact_us');

Route::get('search', 'HotSpringController@search');

Route::get('hotspring', 'HotSpringController@index');

Route::get('hotspring/type/{type}', 'HotSpringController@hotspring_type');

Route::get('hotspring/rating/{rating}', 'HotSpringController@hotspring_rating');

Route::post('hotspring/search', 'HotSpringController@hotspring_search');

Route::get('hotspring/menu/{slug}', 'HotSpringController@hotspring_menu');

Route::get('details/{slug}', 'HotSpringController@hotspring_details');

Route::get('feedback/{slug}', 'HotSpringController@hostspring_feedback');

Route::post('hotspring/{slug}/hotspring_review', 'HotSpringController@hotspring_review');

Route::get('add_item/{item_id}', 'CartController@add_cart_item');

Route::get('delete_item/{item_id}', 'CartController@delete_cart_item');


Route::get('order_details', 'CartController@order_details');

Route::get('send_order', 'CartController@send_order');

Route::post('order_details', 'CartController@confirm_order_details');

Route::get('myorder', 'CartController@user_orderlist');

Route::get('cancel_order/{order_id}', 'CartController@cancel_order');




// Password reset link request routes...
Route::get('admin/password/email', 'Auth\PasswordController@getEmail');
Route::post('admin/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('admin/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('admin/password/reset', 'Auth\PasswordController@postReset');

Route::post('contact_send', 'IndexController@contact_send');

 

 
