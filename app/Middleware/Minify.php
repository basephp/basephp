<?php

namespace App\Middleware;

/**
 * This Middleware compresses the "html" on a single line. (reduces whitespace)
 *
 */
class Minify
{

    public function handle($request, $next)
    {
        return $next($request);
    }
    
    public function terminate($request, $response)
    {
        if ($response->getContentType() == 'text/html')
        {
            $response->setBody(preg_replace('/\s+/', ' ', $response->getBody()));
        }
    }

}
