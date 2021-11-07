<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => ['required', 'email']]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            return Redirect::to(URL::previous() . "#newsletter")->withErrors(['email' => 'This email could not be added to our newsletter list.']);
        }
        

        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
