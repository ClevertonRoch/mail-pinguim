<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;
        $message = $request->message;

        $data = [
            'name' => $name,
            'tel' => $tel,
            'message' => $message,
        ];

        Mail::to($email)->send(new Sendmail($data));

        return redirect()->back();

    }
}
