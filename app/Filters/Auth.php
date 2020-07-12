<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = Services::session();
        if ($request->uri->getSegment(1) == 'user') {
            if (!$session->has('is_siswa_login')) {
                return redirect()->to(base_url('/'));
            }
        }
        if ($request->uri->getSegment(1) == 'admin') {
            if (!$session->has('is_admin_login')) {
                return redirect()->to(base_url('/'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }
}
