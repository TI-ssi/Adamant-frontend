<?php

namespace App\Http\Controllers;

use App\Library\Services\ApiWrapper;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as LaravelBaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use GuzzleHttp\Client;


class ContentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        
    public function index($slug = 'index', ApiWrapper $api){

        try{
            $testApi = $api->sendTo('/')['data']['message'];
        }catch(\Exception $e){
            $testApi = $e->getMessage();
        }
        
        
        return view("pages/{$slug}", [
            'slug' => $slug,
            'test_api' => $testApi
        ]);
    }

    public function setLang($lang = 'fr'){
        Session::put('applocale', $lang);
        Session::save();
        return redirect()->back();
    }

    public function dashboard(ApiWrapper $api, Request $request){

        return view("pages/dashboard", [
            'isAdmin' => $this->userHasRole($request->user(), 'admin'),
            'slug' => ''
        ]);
    }



    public function underconstruct(){
	abort(503, 'Page is under constructions...');
    }
}
