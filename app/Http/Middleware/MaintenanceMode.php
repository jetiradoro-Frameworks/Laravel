<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class MaintenanceMode
{

    protected $request;
    protected $app;
    protected $except_ips;

    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
        $this->except_ips = [
            '127.0.0.1'
        ];
    }

    public function handle($request, Closure $next)
    {
        if ($this->app->isDownForMaintenance() &&
            !in_array($this->request->getClientIp(), $this->except_ips)
        ) {
            return response('Be right back!', 503);
        }

        return $next($request);
    }

}