<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserdirUri implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $request->uri->setPath('');
    }
}