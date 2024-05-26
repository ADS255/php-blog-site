<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is logged in
        $session = session();
        if (!$session->get('isLoggedIn')) {
            // Redirect to login page if not logged in
            return redirect()->to(base_url('/login'));
        }

        // You can also check for specific roles or permissions here
        // if (!$session->get('isAdmin')) {
        //     // Redirect to unauthorized page or home page if not authorized
        //     return redirect()->to('/unauthorized');
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here if needed
    }
}
