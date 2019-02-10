<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    }
    public function mail(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = array('fname' => $request['fname'], 'email' => $request['email'],
            'subject' => $request['subject'], 'content' => $request['message'], );
        Mail::send('admin.emails.mail', $data, function($message) use ($data) {
            $message->to('artyomkaraxanyan@gmail.com')
                ->subject('Message For Job');
            $message->from($data['email']);

        });
        return  redirect('/');
    }
}
