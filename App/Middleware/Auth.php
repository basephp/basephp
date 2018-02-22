<?php

namespace App\Middleware;

use Wine\Routing\Middleware;

/**
 * This Middleware compresses the "html" on a single line. (reduces whitespace)
 *
 */
class Auth extends Middleware
{
    public function request($level)
    {
        echo $level;
    }
}
