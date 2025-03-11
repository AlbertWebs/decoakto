<?php

namespace App\Http\Controllers;
// use Spatie\Newsletter\NewsletterFacade as Newsletter;
use Spatie\Newsletter\Facades\Newsletter;
// use Newsletter;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailchimpController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');
        Newsletter::subscribe($email);
        return redirect()->back();
    }
}
