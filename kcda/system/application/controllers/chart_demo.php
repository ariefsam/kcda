<?php

class Chart_demo extends Controller {

    function Chart_demo(){
            parent::Controller();
    }
    function index()
    {
            echo "<img src='index.php/chart_demo/generate_chart_manual'><br />"	;
            echo "<img src='index.php/chart_demo/test'><br />"	;
//            echo "<img src='index.php/chart_demo/generate_chart_database'>"	;

    }

    function generate_chart_manual()
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
    function test()
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

            echo create_bar_chart("Alasan Pekerjaan",$data,450,250, "pie");
    }
    function generate_chart_database()
    {
            $this->load->plugin('chart');
            
            $query=$this->db->get('kecamatan');
            echo create_bar_chart("Alasan Pekerjaan",$query->result_array(),450,250);
    }

}