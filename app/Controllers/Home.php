<?php

namespace App\Controllers;

use App\Models\PembayaranModel;
use App\Models\ProfilModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
	public function __construct()
	{
		$this->pembayaranModel = new PembayaranModel();
		$this->profilModel = new ProfilModel();
		$this->time = new Time('now', 'Asia/Jakarta', 'id');
	}

	public function index()
	{
		$data = [
			'waktu_dibuka' => "2022/2/4",
		];

		// dd($data);
		if ($this->time->now()->getTimeStamp() >= $this->time->setDate(2022, 2, 4)->getTimeStamp()) {
			return view('index');
		} else {
			return view('commingsoon', $data);
		}
	}
	public function mahasiswa()
	{
		if ($post = $this->pembayaranModel->where('user_id', user_id())->get()->getRow()) {
			$status = $post->status;
			$pdf = $post->pdf_link;
		} else {
			$status = null;
			$pdf = null;
		}

		$data = [
			'uang_masuk' => $this->pembayaranModel->where('status', 'settlement')->selectSum('gross_amount', 'nominal')->get()->getRow(),
			'total_pendaftar' => $this->profilModel->countAllResults(),
			'pendaftar_lulus' => $this->profilModel->join('status_mhs', 'status_mhs.profil_id = profil.id')->countAllResults(),
			'status_bayar' => $status,
			'pdf_link' => $pdf,
			'profil' => $this->userModel->join('profil', 'profil.user_id = users.id')->find(user_id()),
			'title_meta' => view('panel/partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('panel/partials/page-title', ['title' => 'Dashboard', 'li_1' => 'PMB STKIP NU INDRAMAYU', 'li_2' => 'Dashboard'])
		];
		// dd($data);
		return view('panel/dashboard', $data);
	}
}