<?php

namespace App\Http\Controllers;

use App\Library\Services\ApiWrapper;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as LaravelBaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use GuzzleHttp\Client;

class AdminController extends LaravelBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request, ApiWrapper $api){

        return view("pages/admin", [
            'slug' => ''
        ]);
    }


}
