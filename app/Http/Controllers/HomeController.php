<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Useremail;
use App\Models\Contacts;
use Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function abouteUs(){  
        return view('front-end.about');
    }

    public function career(){
        return view('front-end.career');
    }

    public function portfolio(){
        return view('front-end.portfolio');
    }

    public function contactus(){
      return view('front-end.contactus'); 
    }

    public function saveEmail(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:useremail,email',
        ]);
        if ($validator->passes()){
        $demo = new Useremail;
        $demo->email = $request->email;
        if($demo->save()){
        return response()->json([
                                  'code'=>'200',
                                  'success'=>'Newsletters Subscribe Successfully.'
                                 ]);
        }
        }else{
        return response()->json($validator->errors()->all());
        }
    }

    public function saveContactForm(Request $request){    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contact,email',
            'mobile' => 'required|numeric',
            'requirement' => 'required',
            'massage' => 'required',

        ]);
        Contacts::create($request->all());
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

    
}
