<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OtpController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    public function enterotp()
    {   
       /*  $newotp= mt_rand(1000, 9999);

        Otp::create([
            'userid' => auth()->user()->id,
            'otp' => $newotp
        ]);

        $newmsg=<<<EOD
        Your One Time Password (OTP):$newotp 
        @app.ukgstore.com/enterotp #$newotp
        EOD;

        
        $sendmsg = Http::get('http://example.com');
         */
        return view('enterotp');
    }

    public function submitotp(Request $request)
    {
       // return $request->all();
        $otp= $request->one.$request->two.$request->three.$request->four;
        if ($otp == '0000') {
            User::where('id', auth()->user()->id)
            ->update(['email_verified_at' => 1]);
        }

        return redirect('home');
    }

}
