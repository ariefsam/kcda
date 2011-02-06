<?php

class Desa_model extends Model {

    function Desa_model()
    {
        parent::Model();
    }

    function get_semua_kecamatan($order = 'nama')
    {
        $data = array();
        $q = $this->db->order_by($order);
        $q = $this->db->get("kecamatan");

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_semua_desa($order = 'nama')
    {
        $data = array();
        $this->db->select('desa.id as id, desa.nama as nama, kecamatan.nama as kecamatan, kecamatan.id as id_kecamatan, desa.keterangan as keterangan');
        $this->db->from('desa');
        $this->db->join('kecamatan', 'desa.kecamatan = kecamatan.id');

        $q = $this->db->get();

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_desa($val, $col = 'id')
    {
        $data = " ";
        $this->db->where($col,$val);
        $q = $this->db->get('desa');

        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_kecamatan($data)
    {
        return $this->db->insert('kecamatan', $data);
    }

    function update_kecamatan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kecamatan', $data);
    }

    function insert_desa($data)
    {
        $x = $this->db->insert('desa', $data);
        return $this->db->insert_id();
    }

    function update_desa($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('desa', $data);
    }

}
