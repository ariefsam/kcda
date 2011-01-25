<?php

class Jumlah_penduduk_model extends Model {

    function Jumlah_penduduk_model()
    {
        parent::Model();
    }

    function insert_kelompok_umur($data)
    {
        return $this->db->insert('kelompok_umur', $data);
    }

    function update_kelompok_umur($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kelompok_umur', $data);
    }

    function insert_data_umur($data)
    {
        return $this->db->insert('kelompok_umur', $data);
    }

    function update_data_umur($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kelompok_umur', $data);
    }

}