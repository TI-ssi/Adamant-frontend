<?php

namespace App\Http\Middleware;

use Closure;
use App\Library\Services\ApiWrapper;

class GetStats
{
    private $api;

    public function __construct(ApiWrapper $api){
        $this->api = $api;
    }

    //helperfunction
    protected function convbase($str, $frombase=10, $tobase=36) {
        $str = trim($str);
        if (intval($frombase) != 10) {
            $len = strlen($str);
            $q = 0;
            for ($i=0; $i<$len; $i++) {
                $r = base_convert($str[$i], $frombase, 10);
                $q = bcadd(bcmul($q, $frombase), $r);
            }
        }
        else $q = $str;

        if (intval($tobase) != 10) {
            $s = '';
            while (bccomp($q, '0', 0) > 0) {
                $r = intval(bcmod($q, $tobase));
                $s = base_convert($r, 10, $tobase) . $s;
                $q = bcdiv($q, $tobase, 0);
            }
        }
        else $s = $q;

        return $s;
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
        $blockchainStats['synced_bloc'] = [];
        /*try{
            $response = $this->api->method('eth_blockNumber')->send();

            $blockchainStats['synced_bloc']['eth'] = (int)$this->convbase($response['result'],16,10);
        }catch(\Exception $e){
            $blockchainStats['synced_bloc']['eth'] = false;
        }*/
        $request->merge(['blockchainStats' => $blockchainStats ]);
        $request->merge(['stats' => [] ]);

        return $next($request);
    }
    
}
