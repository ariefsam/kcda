<?php
class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model('desa_model', 'desa');
    }

    function index()
    {
        //redirect('../index.php/super-admin/kecamatan');
        echo "berhasilddd";
    }

    function kecamatan()
    {
        echo "hi";
    }
}