<?php

namespace App\Controllers;

use App\Models\AuthModels;

class Profile extends BaseController
{
  protected $AuthModels;
  protected $session;
  public function __construct()
  {
    $this->AuthModels = new AuthModels();
    $this->session = \Config\Services::session();
  }
  public function index()
  {
    $id_user = $this->session->get('id_user');
    $data = [
      'title' => 'Profil | Tes magang pt inagata',
      'user' => $this->AuthModels->getUser($id_user)
    ];

    // dd($id_user);
    return view('/admin/profile/index', $data);
  }


  public function edit()
  {
    $id_user = $this->session->get('id_user');
    $data = [
      'title' => 'Edit User',
      'validation' => \config\Services::validation(),
      'user' => $this->AuthModels->getUser($id_user)
    ];
    return view('/Admin/Profile/Edit', $data);
  }

  public function update()
  {
    $id_user = $this->session->get('id_user');
    //cek data  lana
    $datalama = $this->AuthModels->getUser($id_user);
    // dd($datalama);
    if ($datalama['nama_user'] == $this->request->getVar('nama_user')) {
      $ruleNama = 'required';
    } else {
      $ruleNama = 'required|is_unique[user.nama_user]';
    }

    if ($datalama['email'] == $this->request->getVar('email')) {
      $ruleemail = 'required';
    } else {
      $ruleemail = 'required|is_unique[user.email]|valid_email';
    }

    // validasi update
    if (!$this->validate([
      'nama_user' => [
        'rules' => $ruleNama,
        'errors' => [
          'required' => '{field}  harus di isi.',
          'is_unique' => '{field}  sudah terdafatar.'
        ]
      ],
      'email' => [
        'rules' => $ruleemail,
        'errors' => [
          'required' => '{field}  harus di isi.',
          'is_unique' => '{field}  sudah terdafatar.',
          'valid_email' => 'format {field} harus email yang valid.'
        ]
      ]
    ])) {
      $validation = \config\Services::validation();
      // dd($validation);
      return redirect()->to('/admin/profile/edit/' . $id_user)->withInput()->with('validation', $validation);
    }
    // dd($this->request->getVar());
    $this->AuthModels->save([
      'id_user' => $id_user,
      'nama_user' => $this->request->getVar('nama_user'),
      'email' => $this->request->getVar('email')
    ]);

    session()->setFlashdata('pesan', 'Data anda berhasil ditambahkan.');
    return redirect()->to('/admin/profile');
  }
}
