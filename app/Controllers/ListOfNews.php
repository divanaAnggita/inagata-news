<?php

namespace App\Controllers;

use App\Models\Beritamodels;

class ListOfNews extends BaseController
{
  public function __construct()
  {
    $this->BeritaModels = new BeritaModels();
  }

  public function index()
  {

    $data = [
      'title' => 'Home | Tes magang pt inagata',
      'berita' => $this->BeritaModels->getberita()
    ];


    return view('/Admin/news/index', $data);
    // echo view('pages/TambahBerita', $data);
  }

  public function edit($id_berita)
  {
    $data = [
      'title' => 'Edit Berita',
      'validation' => \config\Services::validation(),
      'berita' => $this->BeritaModels->getberita($id_berita)
    ];

    return view('/Admin/news/edit', $data);
  }

  public function update($id_berita)
  {
    //cek data berita lana
    $beritaLama = $this->BeritaModels->getberita($id_berita);
    // dd($beritaLama);
    if ($beritaLama['judul_berita'] == $this->request->getVar('judul_berita')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[berita.judul_berita]';
    }

    // validasi update
    if (!$this->validate([
      'judul_berita' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => '{field}  harus di isi.',
          'is_unique' => '{field}  sudah terdafatar.'
        ],
        'isi_berita' => 'required'
      ]
    ])) {
      $validation = \config\Services::validation();
      // dd($validation);
      return redirect()->to('/admin/news/edit/' . $id_berita)->withInput()->with('validation', $validation);
    }
    // dd($this->request->getVar());
    $this->BeritaModels->save([
      'id_berita' => $id_berita,
      'judul_berita' => $this->request->getVar('judul_berita'),
      'isi_berita' => $this->request->getVar('isi_berita')
    ]);

    session()->setFlashdata('pesan', 'Data anda berhasil ditambahkan.');
    return redirect()->to('/admin/news');
  }

  public function add()
  {
    // session();
    $data = [
      'title' => 'Create Berita',
      'validation' => \config\Services::validation()
    ];

    return view('admin/news/add', $data);
  }
  public function save()
  {
    // validasi inputan
    if (!$this->validate([
      'judul_berita' => [
        'rules' => 'required|is_unique[berita.judul_berita]',
        'errors' => [
          'required' => '{field} judul berita harus di isi.',
          'is_unique' => '{field} judul berita sudah terdafatar.'
        ]
      ],
      'isi_berita' => 'required'
    ])) {
      $validation = \config\Services::validation();
      // dd($validation);
      return redirect()->to('/admin/news/add')->withInput()->with('validation', $validation);
    }
    // dd($this->request->getVar());
    $this->BeritaModels->save([
      'judul_berita' => $this->request->getVar('judul_berita'),
      'isi_berita' => $this->request->getVar('isi_berita')
    ]);

    session()->setFlashdata('pesan', 'Data anda berhasil ditambahkan.');
    return redirect()->to('/admin/news');
  }

  public function delete($id_berita)
  {
    $this->BeritaModels->delete($id_berita);

    session()->setFlashdata('pesan', 'Data anda berhasil dihapus.');
    return redirect()->to('/admin/news');
  }
}
