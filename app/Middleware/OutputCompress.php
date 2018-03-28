<?php

namespace App\Middleware;

use Base\Routing\Middleware;

/**
 * This Middleware compresses the "html" on a single line. (reduces whitespace)
 *
 */
class OutputCompress extends Middleware
{
    public function response()
    {
        if ($this->response->getContentType() == 'text/html')
        {
            $this->response->setBody(preg_replace('/\s+/', ' ', $this->response->getBody()));
        }
    }
}
