<?php

class ModelAdmin extends CI_Model
{

    public function get()
    {
        $this->db->from("admin");
        return $this->db->get();
    }
    public function get_all_admin() {
        $query = $this->db->get('admin'); // Fetch all records from the 'admin' table
        if ($query->num_rows() > 0) {
            return $query->result_array(); // Return the result as an array
        } else {
            return array(); // Return an empty array if no records found
        }
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('admin', $where);
    }
    public function insert($data)
    {
        $this->db->select('id_admin');
        $this->db->order_by('id_admin', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('admin');

        $row = $query->row();
        $last_id_admin = "";
        if ($row) {
            $last_id_admin = $row->id_admin;
        } else {
            $last_id_admin = "ADM00";
        }
        // echo $last_id_admin;
        $last_numeric_id_admin = (int) substr($last_id_admin, "3");
        // echo $last_numeric_id_admin;
        $next_numeric_id_admin = $last_numeric_id_admin + 1;
        // echo $next_numeric_id_admin;
        $next_id_admin = str_pad($next_numeric_id_admin, 2, '0', STR_PAD_LEFT);
        // echo $next_id_admin;
        // return "ADM" . $next_id_admin;

        $data["id_admin"] = "ADM" . $next_id_admin;
        $this->db->insert("admin", $data);

    }

}

?>