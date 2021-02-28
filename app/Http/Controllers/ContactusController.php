<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contactus;

class ContactusController extends Controller
{
    public function FlashMessage($key, $message)
    {
        return session()->flash($key, $message);
    }


    public function index(){

        $messages = Contactus::orderBy('created_at', 'desc')->paginate(10);

        return view('contact.index', compact('messages'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->ValidateContact();
        $attributes= Contactus::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'message' => $request['message'],
                    'subject' => $request['subject'],
                ]);
        session()->flash('Message', 'Messege has been sent successfully!');
        
        return redirect()->back();
    }
    public function ValidateContact()
    {
        return request()->validate([
            'name'=>'required',
            'email'=>'email|required',
            'message'=>'min:10|max:9000|required',
            'subject'=>'nullable'
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactus $contactus)
    {
        if(Auth::user()->isA('superadmin')){
            
            $contactus ->delete($contactus);
            $this->FlashMessage('MessageDeleted', 'Your News has been deleted [ Subject: '. $contactus->subject . ', Email: '. $contactus->email . ' ]');
            return redirect()->route('dashboard.home');
        }
         $this->FlashMessage('UnauthorisedUser', ' Unauthorised to Delete Message!');
         return redirect()->back();
    }


    
}
