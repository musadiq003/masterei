<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\mymail;
use Mail;



class MailController extends Controller
{
       public function send(Request $request)
    {

      $data = array(
				'name'=>$request->input('name'),
				'email'=>$request->input('email'),
				'subject'=>$request->input('subject'),
				'message'=>$request->input('message'),
			);


      Mail::to('Masterelectricalindustry@gmail.com')->send(new mymail($data));


    
    return back();
}
}
