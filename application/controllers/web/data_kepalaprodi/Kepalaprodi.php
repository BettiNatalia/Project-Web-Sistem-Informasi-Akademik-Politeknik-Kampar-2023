<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepalaprodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kepalaprodi');
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['data'] = $this->M_kepalaprodi->Get();
        $data['pages'] = 'web/prodi_kaprodi/prodi_kaprodi';
        $this->load->view('template', $data);
    }


    function add()
    {
        $data['dosen_list'] = $this->M_kepalaprodi->GetKodeDosen();
        $data['pages'] = 'web/prodi_kaprodi/add_prodi_kaprodi';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_kaprodi' => $post['id_kaprodi'],
            'kode_kaprodi' => $post['kode_kaprodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_kepalaprodi->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Di Tambahkan');
        redirect(base_url('web/data_Kepalaprodi/kepalaprodi'));
    }

    public function edit($id_kaprodi)
    {
        $data['dosen_list'] = $this->M_kepalaprodi->GetKodeDosen();
        $data['data'] = $this->M_kepalaprodi->Get($id_kaprodi)->row();
        $data['pages'] = 'web/prodi_kaprodi/edit_prodi_kaprodi';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_kaprodi' => $post['id_kaprodi'],
            'kode_kaprodi' => $post['kode_kaprodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_kepalaprodi->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Di Update');
        redirect(base_url('web/data_kepalaprodi/kepalaprodi'));

    }

    function delete($id_kaprodi)
    {
        $this->session->set_flashdata('success', 'Data berhasil Di Hapus');
        $this->M_kepalaprodi->Deleted($id_kaprodi);
        redirect(base_url('web/data_kepalaprodi/kepalaprodi'));
    }


}