<?php

namespace App\Http\Middleware;

use Closure;
use App\Library\Services\ApiWrapper;

class ApiAuth
{
    private $api;

    public function __construct(ApiWrapper $api){
        $this->api = $api;
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $user = collect($this->api->getAccess()->sendTo('/v1/AuthUser')['data']);
            $user->put('roles', collect($user->get('roles')));
            
            $request->merge(['user' => $user ]);

            //add this
            $request->setUserResolver(function () use ($user) {
                return $user;
            });
            
            return $next($request);
        }catch(\Exception $e){
            return redirect('/login');
        }
    }
    
}
