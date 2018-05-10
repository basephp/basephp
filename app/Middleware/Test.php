<?php

namespace App\Middleware;

/**
 * This Middleware compresses the "html" on a single line. (reduces whitespace)
 *
 */
class Test
{
    public function handle($request, $next)
    {
        return $next($request);
    }
}
