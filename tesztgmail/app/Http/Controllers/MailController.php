<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMAIL;

class MailController extends Controller
{
    public function index()
   {
       $mailData = [
           'title' => 'proba',
           'body' => 'Ha elolvastad égesd el!'
       ];
       
       Mail::to('eakos2131@gmail.com')
->send(new DemoMail($mailData));

       dd("Email is sent successfully.");
   }

}
