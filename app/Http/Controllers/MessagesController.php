<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Message;

use Carbon\Carbon;

use Auth;

class MessagesController extends Controller
{
    //
    public function send_message() {
        //
        $input = Request::all();
        
        if ( isset($input['name'],$input['mail'],$input['subject'],$input['text']) 
                && $input['name'] != '' && $input['mail'] != '' && $input['subject'] != '' && $input['text'] != '' ){
            //Insert
            $message = new Message;
            $message->name = $input['name'];
            $message->mail = $input['mail'];
            $message->text = $input['text'];
            $message->subject = $input['subject'];
            $message->created_at = Carbon::now()->format('Y-m-d H:i:s');
            $message->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $message->save();
        }
        return redirect()->back();
    }
    
    public function index(){
        //
        if ( Auth::user()->id == 1) {
            //
            $messages = Message::all()->reverse();

            return view('portfolio.administrator.messages', compact('messages'));
        }
        
        return 'You don\'t have permission to access this page!';
    }
}
