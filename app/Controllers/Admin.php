<?php

namespace App\Controllers;

use CodeIgniter\Session\Session;

class Admin extends BaseController
{
  protected $session;
  public function __construct()
  {
    $this->session = \Config\Services::session();
  }
  public function index()
  {
    $data = [
      'name' => $this->session->get('nama_user'),
    ];
    return view('/Admin/index', $data);
  }
}
