<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserdirUri implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $reqObj = \Config\Services::request();
         d( $reqObj->uri);
         d( $reqObj );

         echo "<br><br>";
         echo "Req uri: ";
         echo (string)$reqObj->uri;
        //$reqObj->uri->setPath('');
        die;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
