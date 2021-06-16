<?php

namespace App\Controllers;

use App\Models\Beritamodels;


class News extends BaseController
{
	protected $BeritaModels;
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


		return view('/News/index', $data);
		// echo view('pages/TambahBerita', $data);
	}

	public function detail($id_berita)
	{
		// dd($berita);
		$data = [
			'title' => 'Detail Berita',
			'berita' => $this->BeritaModels->getberita($id_berita)
		];
		return view('/News/detail', $data);
	}
}
