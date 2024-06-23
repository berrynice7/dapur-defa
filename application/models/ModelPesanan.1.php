<?php

class ModelPesanan extends CI_Model
{
    public function get()
    {
        $this->db->from("pesanan");
        return $this->db->get();
    }
    
    public function create_pesanan($data) {
        return $this->db->insert('pesanan', $data);
    }

    public function get_all_menu() {
        $query = $this->db->get('menu');
        return $query->result_array();
    }

        public function get_pesanan($id_pesanan) {
        $this->db->select('pesanan.*, menu.nama_menu, menu.harga_menu');
        $this->db->from('pesanan');
        $this->db->join('menu', 'pesanan.id_menu = menu.id_menu');
        $this->db->where('pesanan.id_pesanan', $id_pesanan);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_all_pesanan() {
        $this->db->select('pesanan.*, menu.nama_menu, menu.harga_menu');
        $this->db->from('pesanan');
        $this->db->join('menu', 'pesanan.id_menu = menu.id_menu');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_pesanan_by_date($start_date, $end_date) {
        $this->db->select('pesanan.*, menu.nama_menu, menu.harga_menu');
        $this->db->from('pesanan');
        $this->db->join('menu', 'pesanan.id_menu = menu.id_menu');
        $this->db->where('pesanan.tanggal >=', $start_date);
        $this->db->where('pesanan.tanggal <=', $end_date);
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>