<?php
class Login extends Controller {

    function Login()
    {
        parent::Controller();
        $this->load->model('Login_model', 'login');
    }

    function index()
    {
        $data = new stdClass();
        $data->view_content = "login";
        $data->judul = "Login Super Admin";
        $this->load->view('super-admin/base', $data);
    }

    function submit()
    {
        if ($this->input->post('submit')){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->login->login_admin($username,$password);
        }

        redirect('super-admin/home');
    }

    function logout()
    {
        $this->session->unset_userdata('superadmin');
        redirect('super-admin/login');
    }

}