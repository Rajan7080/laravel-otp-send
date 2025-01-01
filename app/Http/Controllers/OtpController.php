<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Nette\Utils\Random;
use illuminate\Support\Carbon;
use app\Models\OtpModel;
use GuzzleHttp\Promise\Create;

class OtpController extends Controller
{
    public function OtpSend(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $otp = rand(100000, 999999);
        session(['otp' => $otp, 'otp_time' => now()]);
        Mail::to($email)->send(new OtpMail($otp, $data));
        return  redirect('otpvalid')->with('status', 'your otp is valid for 5 minutes');
    }
    public function Otp(Request $request)
    {
        $data = $request->validate([
            'otp' => 'required',
        ]);
        $inputOtp = $request->input('otp');
        $storeOtp = session('otp');
        $store_time = session('otp_time');
        if ($inputOtp == $storeOtp) {
            if ($store_time && now()->diffInMinutes(Carbon::parse($store_time)) < 5) {
                return redirect()->route('otpvalid')->with('status', 'otp success verify');
            } else {
                return redirect()->route('otpvalid')->with('error', 'otp is invalid or Expire');
            }
        } else {
            return redirect()->route('otpvalid')->with('error', 'otp is invalid');
        }
    }
}
