<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
 
    // Fungsi : menampilkan seluruh data
    public function index()
    {
        // load model
        $this->load->model('dosen_model','dsn1');

        // Pake class model
        $this->dsn1->id=3;
        $this->dsn1->nama="Rizqy Aditya";
        $this->dsn1->nidn='0022003';
        $this->dsn1->gender="L";
        $this->dsn1->tmp_lahir="JAKARTA";
        $this->dsn1->tgl_lahir="12 APRIL 1990";
        $this->dsn1->pendidikan="S1 ILMU KOMUNIKASI";

        // Buat objek 2
        // Load model +bikin objek
        $this->load->model('dosen_model','dsn2');

        // Pake class model data + Isi data
        $this->dsn2->id=4;
        $this->dsn2->nama='Michael Rakeed';
        $this->dsn2->nidn='0022005';
        $this->dsn2->gender='L';
        $this->dsn2->tmp_lahir='DEPOK';
        $this->dsn2->tgl_lahir='15 JUNI 1993';
        $this->dsn2->pendidikan='S1 HUKUM';

        // Buat objek 3
        // Load model + bikin objek
        $this->load->model('dosen_model','dsn3');

        // Pake class model data + Isi data
        $this->dsn3->id=5;
        $this->dsn3->nama='Gibransyah';
        $this->dsn3->nidn='0022001';
        $this->dsn3->gender='L';
        $this->dsn3->tmp_lahir='DEPOK';
        $this->dsn3->tgl_lahir='15 Agustus 1992';
        $this->dsn3->pendidikan='S1 TEHNIK INFORMATIKA';

        // simpan objek ke dalam array
        $list_dsn= [$this->dsn1, $this->dsn2, $this->dsn3];

        // siapin data untuk dikirim ke view
        $data['list_dsn'] = $list_dsn;

        // Untuk ngirim data + nampilin ke view
        // $this->load->view('header');
        // $this->load->view('dosen/index', $data);
        // $this->load->view('footer');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');


	}

    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        // Load model dosen
        $this->load->model("dosen_model", "dsn1");

        $this->dsn1->nidn = $this->input->post('nidn');
        $this->dsn1->nama = $this->input->post('nama');
        $this->dsn1->gender = $this->input->post('gender');
        $this->dsn1->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn1->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn1->pendidikan = $this->input->post('pendidikan');

        $data["dsn1"] = $this->dsn1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');


    }
}








