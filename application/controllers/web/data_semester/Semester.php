<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Semester extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_semester');
    }

    public function index()
    {
        $data['data'] = $this->M_semester->Get()->result();
        $data['pages'] = 'web/semester/semester';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/semester/add_semester';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_semester' => $post['id_semester'],
            'semester' => $post['semester'],
            'keterangan' => $post['keterangan']
        ];
        $this->M_semester->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_semester/semester'));
    }

    public function edit($id_semester)
    {
        $data['data'] = $this->M_semester->Get($id_semester)->row();
        $data['pages'] = 'web/semester/edit_semester';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_semester' => $post['id_semester'],
            'semester' => $post['semester'],
            'keterangan' => $post['keterangan']
        ];
        $this->M_semester->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_semester/semester'));

    }

    function delete($id_semester)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_semester->Deleted($id_semester);
        redirect(base_url('web/data_semester/semester'));
    }


}