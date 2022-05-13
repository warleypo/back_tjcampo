<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && $this->hasPermission($request)) {
            return $next($request);
        }
        return response()->json(['error' => 'Unauthorized', 'user'=> auth()->user(), 'request' => $request->route(), 'endpoint' => $this->getEndpoint($request)], 203);
    }

    private function getEndpoint($request) {
        return explode('.', $request->route()->action['as'])[1];
    }

    private function hasPermission($request) {
        // 1 - show/index, 2 - create/edit/store, 3 - update, 4 - delete, 7 - super
        $endpointPermissions = [
            'show' => 1,
            'index' => 1,
            'create' => 2,
            'edit' => 2,
            'store' => 2,
            'update' => 3,
            'delete' => 4,
        ];
        $endpoint = $this->getEndpoint($request);

        if (auth()->user()->permission >= $endpointPermissions[$endpoint]) {
            return true;
        }

        return false;
    }
}
