<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	// Fungsi : menampilkan seluruh data
    public function index()
	{
        // load model
        $this->load->model('matakuliah_model', 'mtk1');

        // class model
        $this->mtk1->nama='Pendidikan Agama';
        $this->mtk1->sks='2';
        $this->mtk1->kode='NF11001';

        // load model
        $this->load->model('matakuliah_model','mtk2');

        // class model
        $this->mtk2->nama='DDP';
        $this->mtk2->sks='3';
        $this->mtk2->kode='IE11001';

        // load model
        $this->load->model('matakuliah_model', 'mtk3');

        // class model
        $this->mtk3->nama='Bahasa Indonesia';
        $this->mtk3->sks='2';
        $this->mtk3->kode='NF11003';

        // load model
        $this->load->model('matakuliah_model', 'mtk4');
        
        // class model
        $this->mtk4->nama='Sistem Operasi';
        $this->mtk4->sks='3';
        $this->mtk4->kode='IE11007';

        // simpan objek ke dalam aarray
        $list_mtk= [$this->mtk1, $this->mtk2, $this->mtk3, $this->mtk4];

        // siapin data untuk dikirim ke view
        $data['list_mtk'] = $list_mtk;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');







    }


}