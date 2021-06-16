<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MustLogin implements FilterInterface
{
  protected $session;
  public function __construct()
  {
    $this->session = \Config\Services::session();
  }
  public function before(RequestInterface $request, $arguments = null)
  {
    if (!$this->session->get('id_user')) {
      return redirect()->to('/Auth/login');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // 
  }
}
