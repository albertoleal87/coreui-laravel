<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Auth;
use Route;
use Request;
use Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    	public function __construct(){
		
			$this->middleware(function ($request, $next) {

				if(Auth::user()){
					$track = [
						'CurrentRouteName' => Route::currentRouteName(),
						'RequestUrl' => Request::url(),
						'User'=> Auth::user()->email,
					];

					Log::info($track);
				}

				return $next($request);
			});		
	}
}
