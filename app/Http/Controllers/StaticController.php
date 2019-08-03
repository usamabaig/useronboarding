<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use Mailgun;
use App\Model\ContactForm;

class StaticController extends Controller
{
    public function __construct()
    {
        //
    }

    public function contactForm()
    {
        return view('static.contact_form');
    }

    public function contactFormSubmit(Request $request)
    {
        // When the validation fails it automatically returns a 422 response ‘Unprocessable Entity’ included with error messages,
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        /*
         * Add Contents of the Message to the Database Table
         * (Email can be unreliable sometimes!)
         */
        $contactFormEntry = new ContactForm;
        $contactFormEntry->name = $request->name;
        $contactFormEntry->email = $request->email;
        $contactFormEntry->message = $request->message;
        $contactFormEntry->save();

        /*
         * Send Email to Admin
         */
        $adminUser = \App\User::where('email', env('ADMIN_EMAIL'))->first();
        if ($adminUser) {
            $adminUser->notify(new App\Notifications\Email\NewContactFormSubmissionEmailNotification($request));
            //return (new App\Notifications\Email\NewContactFormSubmissionEmailNotification())->toMail($adminUser);
        }

        // send the request back in the Json response. Just for fun.
        $response = $request;
        return response()->json($request, 200);
    }
}
