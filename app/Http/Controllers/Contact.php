<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\SampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Contact extends Controller
{
    public function submit(Request $request)
    {

        $validated = $request->validate([
            "email" => ["required", "email"],
            "name" => ["required", "string"],
            "body" => ["required", "string"],
        ]);


        Mail::to('bazirakyetonny15@gmail.com')->send(new ContactMail($validated['name'], $validated['email'], $validated['body']));


        return ['success' => true];
    }
}
