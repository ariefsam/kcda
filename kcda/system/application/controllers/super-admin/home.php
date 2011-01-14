<?php
class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model('desa_model', 'desa');
    }

    function index()
    {
        redirect('super-admin/home/kecamatan');
    }

    function kecamatan()
    {
        echo "hi";
    }
}