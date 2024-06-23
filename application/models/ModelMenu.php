<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMenu extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_menu($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('menu');
            return $query->result_array();
        }
        $query = $this->db->get_where('menu', array('id_admin' => $id));
        return $query->row_array();
    }

    public function getMenu() {
        $result = $this->db->get('menu')->result_array();
        return $result;
    }

    public function set_menu() {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price')
        );
        return $this->db->insert('products', $data);
    }

    public function update_product($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price')
        );
        $this->db->where('id', $id);
        return $this->db->update('products', $data);
    }

    public function delete_product($id) {
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }
    public function get_all_paket() {
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function get_paket($id_menu) {
        $query = $this->db->get_where('menu', array('id_menu' => $id_menu));
        return $query->row_array();
    }
}
