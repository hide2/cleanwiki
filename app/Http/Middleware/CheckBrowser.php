<?php

namespace App\Http\Middleware;
use Jenssegers\Agent\Agent;

use Closure;

class CheckBrowser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // 执行动作
        $agent = new Agent();
        $browser = $agent->browser();
        $version = $agent->version($browser);
        if ($browser == 'IE' and (int)($version) < 9 and $request->path() != 'out') {
            return redirect('out');
        }
        if (($browser != 'IE' or ($browser == 'IE' and (int)($version) >= 9)) and $request->path() == 'out') {
            return redirect('/');
        }

        return $response;
    }
}
