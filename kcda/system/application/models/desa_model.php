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
        return $this->db->insert('desa', $data);
    }

    function update_desa($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('desa', $data);
    }

}
