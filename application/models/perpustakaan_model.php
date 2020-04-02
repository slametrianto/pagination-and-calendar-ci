<?php

class Perpustakaan_model extends CI_Model{

    public function get_data($limit, $start){
        $query = $this->db->get('tb_buku', $limit, $start);
        return $query;
    }
}