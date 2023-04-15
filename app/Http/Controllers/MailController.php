<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
    public function index(Request $r)
    {
        $mailData = [
            'email' => $r->email,
            'name' => $r->name,
            'body' => $r->body
        ];
         
        Mail::to('moh.abouelsaad@gmail.com')->send(new DemoMail($mailData));
        return back()->withInput();
           
    }
}