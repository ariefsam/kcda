<?php
class Grafik extends Controller {

    function Grafik()
    {
        parent::Controller();
    }

    function index()
    {

    }

    function jumlah_penduduk($id_desa)
    {
        $this->load->plugin('chart');
        $data[0]["key"]="key 1";
        $data[0]["value"]="17";
        $data[1]["key"]="key 2";
        $data[1]["value"]="26";
        $data[2]["key"]="key 4";
        $data[2]["value"]="34";
        $data[3]["key"]="key 4";
        $data[3]["value"]="97";

        echo create_bar_chart("Alasan Pekerjaan",$data,450,250);
    }

}