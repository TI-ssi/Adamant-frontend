<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as LaravelBaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Library\Services\ApiWrapper;
use Mockery\Exception;

class LoginController extends LaravelBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function loginScreen(Request $request, ApiWrapper $api){
        return view("pages/login", ['slug' => '', 'login_error' => $request->old('error')]);
    }

    public function login(Request $request, ApiWrapper $api){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        try{
            $api->auth($request->username, $request->password);
        }catch(\Exception $e){
            return back()->withInput(['username' => $request->username, 'error' => 'login_error']);
        }

        return redirect('dashboard');
    }

    public function registerScreen(Request $request, ApiWrapper $api){
        return view("pages/register", ['slug' => '', 'login_error' => $request->old('error')]);
    }


    public function register(Request $request, ApiWrapper $api){
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|same:password_confirm',
        ]);
        
        try{
            $api->getAccess(true)->withData($request->all())->sendTo('v1/register', 'POST');
        }catch(\Exception $e){
            return back()->withInput(['username' => $request->username, 'error' => 'register_error']);
        }
        return redirect('login')->with('success' , TRUE);
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('');
    }
    
}
