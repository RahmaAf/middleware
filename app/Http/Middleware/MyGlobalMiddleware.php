<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class MyGlobalMiddleware 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
  public function handle($request, Closure $next)
  {
        
        
        echo "Testing middleware";
                
                return $next($request);

  }
}
