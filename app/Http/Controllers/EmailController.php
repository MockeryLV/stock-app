<?php

namespace App\Http\Controllers;

use App\Events\SentEmailEvent;
use App\Mail\WelcomeMail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function insert(){


        $email = new Email();
        $email->email = request('email');
        $email->subject = request('subject');
        $email->message = request('message');
        $email->save();
        event(new SentEmailEvent($email));

        Mail::to('tripezzshow@gmail.com')->send(new WelcomeMail($email));

        return redirect('/home');

    }


}
