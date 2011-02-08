<?php
class Login extends Controller {

    function Login()
    {
        parent::Controller();
    }

    function index()
    {
        $data = new stdClass();
        $data->title = "Login";
        $data->view_content = "login";
        $data->breadcrumb = '<a href="./">Home</a> > Login';
        $this->load->view("base", $data);
    }

    function p()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('Login_model');
        $this->Login_model->login_desa($username,$password);
        redirect('perbaharui');
    }

    function logout()
    {
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('admin_desa');
        $this->session->unset_userdata('nama_desa');
        redirect('login');
    }

}