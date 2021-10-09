<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Mail;

class mailController extends Controller
{
    
    public function send(){
        
        Mail::send(['text'=>'mail'],['name','Клуб Красный Носорог'] , function($message){

            $email_from_cookie = Cookie::get('email'); //get user email
            $email = "fandim16k@gmail.com";
            $subject = 'Мы приняли вашу заявку:) Cкоро вам позвоним!';
            $message->to($email_from_cookie)->subject($subject);
            $message->from('redrihnoclub@gmail.com','RedRihnoClub');
        });
    }
}
