<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Validator;
use App\Repositories\ClientRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Mail;


class MainController extends Controller
{
    //we return main page of webapp
    public function show_home_page(){
        return view('home');
    }

    //return login_page , if cookie constrains data of user , auth automaticly
    public function show_login_page_or_signin_automaticly(Request $request){
        $name_from_cookie = Cookie::get('name');
        $password_from_cookie = Cookie::get('password');
        $email = $request->email;
        $password =$request->password;
        // in case  have  no cookies 
        if($name_from_cookie == null && $password_from_cookie == null){
            //return redirect('/auth');
            $user=User::where('email','=',$email ,'and','password','=',$password)->first();
            //sometime data of cookie can be lost , write down it anyway.
            
            return redirect('/userroom')->cookie('name',$user->name)->cookie('password',$user->password);
            
            //return redirect('/userroom'); 
        }
        else{
            $user=User::where('name','=',$name_from_cookie,'and','password','=',$password_from_cookie)->first(); 
            return redirect('/userroom');
        }
        // if all conditions does not work 
        return view('home');
    } 

    //return page of user room and data about the user
    public function show_user_room(Request $request){
        
        $name =  Cookie::get('name');
        // var name is empty or not ?
        if($name == null){
            return redirect('/auth');
        }
        else{
            //if cookie "name" exists
            $user = DB::table('users')->where('name',$name)->first();
            //$games = DB::table('list_of_games')->all();
            $games = DB::select('SELECT * FROM list_of_games');
        }
        
            
        //$user_in_room->password = $request->cookie('password');
        

        return view('userroom' , ['user'=> $name , 'data_about_user'=> $user ,'games' => $games ]);
    }

    //return login page 
    public function show_login_room(){

        return view('login');
    
    }
    //return registration page
    public function show_registration_room(Request $request){
        


        return view('registration');
    }
    //create a new user 
    public function registrate_user_and_return_him_to_home_page(Request $request){

        //suggested user is exist or not ? In begin I assume - no 
        $user_exists_in_base = false ;

        // generate unique crsf token for user
        $token = csrf_token();

        //first step , I  do validation for data 
        $this->validate($request, [
            'name' => 'required|min:8',
            'password' => 'required|min:8',
            'email'=>'required|email',
            'phone'=>'required|max:13'
        ]);

        //init and creat object  
        $user = new User;
        /*$user->fill([
        'name' =>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'phone'=>$request->phone,
        'remember_token' => $token,
        ]);
        */
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->email = $request->email;
    
        // check for existing of same user in data base 

        $all_users_from_data_base = User::all();


        foreach($all_users_from_data_base as $value_for_check){
            if($user->name == $value_for_check->name){
                if($user->password == $value_for_check->password){
                    if($user->email == $value_for_check->email){
                        if($user->phone == $value_for_check->phone){
                             
                             $user_exist = true;
                             return redirect('/');
                        }
                    }
                }
                 

            }
        }

        if ( $user_exists_in_base == false  ){
            $user->save(); 
            // put cookies , to take it later and make authorization
            //$response = new Response('Set Cookie of User');
            
            //$response->withCookie(cookie()->forever('name', $user->name));
            //$response->withCookie(cookie()->forever('password_of_user', $user->password));
            //$cookie_name = Cookie::forever('name', $user->name);
            
            //$cookie_password = Cookie::forever('password' , $user->password);
            //->cookie('name',$user->name);
            
            $name_for_cookie  = Cookie::forever('name',$user->name);
            $password_for_cookie = Cookie::forever('password',$user->password); 

            return redirect('/userroom')->withCookie($name_from_cookie)->withCookie($password_for_cookie);
            //return redirect('/userroom')->cookie('name',$user->name)->cookie('password',$user->password);
        }

        //In  the end , I put data in cookie and redirect to user room    


    }
    

    //we return price page of webapp
    public function show_price_page(){
        return view('price');
    }
    //we return rent page of webapp
    public function show_rent_page(){
        return view('rent');
    }

    // proccess data for rent 

    public function recive_data_and_insert_into_db(Request $request){

        // if user didn't point date
        if($request->date == null){
            $current_date = Carbon::now()->toDateTimeString(); // Produces something like "2019-03-11 12:25:00"
            $request->date = $current_date;
        }
        else{
            $current_date = $request->date;
        }

        $fields_of_radio_button = $request->result;
        if($fields_of_radio_button == 'playstation5'){
            $fields_of_radio_button = "yes,we need vip for:";
        }
         else{
            $fields_of_radio_button = "not needed";
        } 
        // insert data in table
        DB::table('rents')->insert([
             'email' => $request->email,
             'name' => $request->name,
             'phone' => $request->phone,
             'pc'=> $request->pc,
             'ps5'=> $fields_of_radio_button,
             'date'=> $current_date
            ]);

        //send mail 
        //$email = Cookie::forever('email',$request->email);

        return redirect('/send')->cookie('email',$request->email);
    }


    
    public function return_google_map_with_data_location_of_club(Request $request){
        

        return view('contact');
    }


    //show club information
    public function return_club_page(){

        return view('club');
    }
    
}


