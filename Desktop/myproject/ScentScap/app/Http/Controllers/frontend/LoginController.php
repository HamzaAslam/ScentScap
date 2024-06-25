<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.login');
    }
        public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'email|required',
                
                
                
            ]
        );

        $login = new LoginModel();
        $login->name = $request->email;
        $login->email = $request->password;
       
        
        $contact->save();
        return back()->with('Success','Thanks for Contacting. We\'ll Contact you ASAP!');
    }
    

}