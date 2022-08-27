<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Services\PayUService\Exception;
use Mail;

class MailController extends Controller
{

    public function store(Request $request)
    {
        //
        try{
            // insert data 
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        // redirect 
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('sobhiraid@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect('/');
        }

        catch (\Exception $e) {

        }
    }

}
