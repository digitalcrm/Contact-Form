<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //create the function and write method for generating view file under resource/view folder
    function index()
    {
    	return view('send_email');
    }

// Use for validate the data and email
    function send(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);
    	$data = array(
    		'name' => $request->name,
    		'message' => $request->message
    	);
    	Mail::to('tech@soft.info')->send(new SendMail($data));
    	return back()->with('success','Thanks for contacting us!');
    }
}
