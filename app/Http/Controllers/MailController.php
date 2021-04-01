<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class MailController extends Controller
{
    public function sendEmailPrice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'telephone' => 'required',
            'company_name'=>'required',
            'site'=>'required|url',
            'country'=>'required',
            'message'=>'required'
        ]);
        session()->put('type','Price');

        if ($validator->passes()) {
            $data =[
                'email'=>$request->email,
                'tel'=>$request->telephone,
                'cname'=>$request->company_name,
                'site'=>$request->site,
                'country'=>$request->country,
                'message'=>$request->message,
            ];
            Mail::to("sedraksargsyan2020@gmail.com")->send(new SendMail($data));

        }
        return response()->json(['error'=>$validator->errors()]);

    }
    public function sendEmailPartner(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'telephone' => 'required',
            'company_name'=>'required',
            'site'=>'required|url',
            'country'=>'required',
            'message'=>'required'
        ]);
        session()->put('type','Partner');

        if ($validator->passes()) {
            $data =[
                'email'=>$request->email,
                'tel'=>$request->telephone,
                'cname'=>$request->company_name,
                'site'=>$request->site,
                'country'=>$request->country,
                'message'=>$request->message,
            ];
            Mail::to("sedraksargsyan2020@gmail.com")->send(new SendMail($data));

        }
        return response()->json(['error'=>$validator->errors()]);

    }
    public function sendEmailContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_email' => 'required|email',
            'first_name' => 'required',
            'last_name'=>'required',
            'country_contact'=>'required',
            'contact_message'=>'required'
        ]);
        session()->put('type','Contact');

        if ($validator->passes()) {
            $data =[
                'contact_email'=>$request->contact_email,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'country_contact'=>$request->country_contact,
                'contact_message'=>$request->contact_message,
            ];
            Mail::to("sedraksargsyan2020@gmail.com")->send(new SendMail($data));

        }
        return response()->json(['error'=>$validator->errors()]);

    }
}
