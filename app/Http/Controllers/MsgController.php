<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MsgController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function inbox()
    {
        $msg = Msg::where([
            ['receiver', Auth::user()->email],
            ['sent',1]
        ])->get();
        return view('messages.inbox', ['msg' => $msg]);
    }
    public function draft()
    {
        return view('messages.draft');
    }
    public function sent()
    {
        // $msg = Msg::where([
        //     ["reciever", Auth::user()->email],
        //     ["sent", '1']
        // ])->get();
        // return view('messages.sent',['message' => $msg]);
    }
    public function archive()
    {
        return view('messages.archive');
    }
    public function trash()
    {
        return view('messages.trash');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Msg $msg)
    {
        $request->validate([
            'receiver' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
            $msg->sender_name = Auth::user()->name;
            $msg->sender_email = Auth::user()->email;
            $msg->subject = $request->subject;
            $msg->receiver = $request->receiver;
            $msg->message = $request->message;
          if (User::where('email', $msg->receiver)->exists()) {
            $msg->save();
            return redirect()->route('inbox')->with('message', 'your message sent sucessfully');
          } else {
            return redirect()->route('inbox')->with('error', 'email does not exist');
          }
          
    }

    /**
     * Display the specified resource.
     */
    public function show(Msg $msg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Msg $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Msg $msg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Msg $msg)
    {
        //
    }
}
