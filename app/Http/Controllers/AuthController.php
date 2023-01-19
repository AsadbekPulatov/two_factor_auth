<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Nakroma\Cereal;
use Napa\R19\Sms;

class AuthController extends Controller
{
    public function register(Request $request){
        $message = Cereal::generate(['length'=>6, 'delimiter'=>'']);
        $user_phone = User::where('phone', $request['phone'])->count();
        $user_email = User::where('email', $request['email'])->count();
        if ($user_email > 0 && $user_phone>0)
            return redirect()->back()->with('error','Registered with phone number and email');
        else if($user_email > 0) return redirect()->back()->with('error','Registered with email');
        else if($user_phone>0) return redirect()->back()->with('error','Registered with phone number');
        else if ($request['password'] == $request['confirm_password']){
            $user = new User();
            $user['name'] = $request['name'];
            $user['phone'] = $request['phone'];
            $user['email'] = $request['email'];
            $user['password'] = Hash::make($request['password']);
            $user['message'] = $message;
            $user->save();
            Sms::send('998'.$request['phone'], $message);
            return view('auth.check',[
               'id' => $user->id,
               'code' => $user->message,
            ]);
        }
    }
    public function check(Request $request){
        $id = $request['id'];
        $user = User::find($id);
        if ($request['code'] == $user['message']){
            $user->status = 1;
            $user->save();
            Auth::login($user, 1);
            return view('auth.dashboard');
        }
        else return view('auth.check',[
            'id' => $user->id,
            "error" => "Invalid code"
        ]);
    }

    public function login(Request $request){
        $message = Cereal::generate(['length'=>6, 'delimiter'=>'']);
        $user = User::where('email', $request['email'])->first();
        $user->message = $message;
        $user->status = 0;
        $user->save();
        Sms::send('998'.$user['phone'], $message);
        return view('auth.check',[
            'id' => $user->id,
            'code' => $message,
        ]);
    }
}
