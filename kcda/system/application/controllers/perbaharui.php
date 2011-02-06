<?php
class Perbaharui extends Controller {

    function Perbaharui()
    {
        parent::Controller();
        if(!$this->session->userdata('admin'))
            redirect('perbaharui/login');
    }

    function index()
    {

    }

    function login()
    {
        
    }

    function login_p()
    {
        
    }

}