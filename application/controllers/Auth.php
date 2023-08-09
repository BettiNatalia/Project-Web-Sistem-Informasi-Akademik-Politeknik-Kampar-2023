<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user','user');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function checklogin()
    {
        $postData = $this->input->post();

        $data = [
            'email'=>$postData['email'],
            'password'=>md5($postData['password'])
        ];
        //check account sesuai dengan inputan form
        $checkUser = $this->user->getuserlogin($data);

        if($checkUser){
            //jika berhasil login akan di alihkan ke  halaman dashboard\
            $sessi=[
                'username'=>$checkUser->nama,
                'email'=>$checkUser->email,
                'login'=>TRUE
            ];
            $this->session->set_userdata($sessi);
            redirect(base_url().'dashboard');
        }else{
           //jika tidak login akan dialihkan ke form login
           $this->session->set_flashdata('error', 'Username dan Password Salah');
           redirect(base_url());
        }
    }

    public function logout()
    {
        $sessi = [
            'username' =>"",
            'email'=>"",
            'login'=>FALSE
        ];
        $this->session->unset_userdata($sessi);
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */
