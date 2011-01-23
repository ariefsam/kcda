<?php
class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model('Desa_model', 'desa');
        
        if(!$this->session->userdata('superadmin'))
            redirect('super-admin/login');
    }

    function index()
    {

        redirect('super-admin/home/kecamatan');
    }

    function kecamatan()
    {
        $data = new stdClass();
        $data->daftar_kecamatan = $this->desa->get_semua_kecamatan();
        $data->view_content = "kecamatan";
        $data->judul = "List kecamatan";
        $this->load->view('super-admin/base', $data);
    }
    
}