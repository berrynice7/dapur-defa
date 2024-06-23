<?php

class ModelPelanggan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getWhere($where)
    {
         return $this->db->get_where("pelanggan", $where);
    }
    public function insert($data)
    {
        $this->db->select('id_pelanggan');
        $this->db->order_by('id_pelanggan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pelanggan');

        $row = $query->row();
        $last_id_pelanggan = "";
        if ($row) {
            $last_id_pelanggan = $row->id_pelanggan;
        } else {
            $last_id_pelanggan = "PLG00";
        }
        // echo $last_id_admin;
        $last_numeric_id_pelanggan = (int) substr($last_id_pelanggan, "3");
        // echo $last_numeric_id_admin;
        $next_numeric_id_pelanggan = $last_numeric_id_pelanggan + 1;
        // echo $next_numeric_id_admin;
        $next_id_pelanggan = str_pad($next_numeric_id_pelanggan, 2, '0', STR_PAD_LEFT);
        // echo $next_id_admin;
        // return "ADM" . $next_id_admin;

        $data["id_pelanggan"] = "PLG" . $next_id_pelanggan;
        $this->db->insert("pelanggan", $data);
    }
    public function update($data, $id_pelanggan){
        $this->db->where(["id_pelanggan" => $id_pelanggan]);
        $this->db->update("pelanggan", $data);
    }
    public function get_all()
    {
        //Mengambil semua data pelanggan
        $query = $this->db->get('pelanggan');
        return $query->result(); // Mengembalikan hasil dalam bentuk array objek
    }
    public function count()
	{
		$this->db->from('pelanggan');
		return $this->db->count_all_results();
	}
	public function deleteWhere($where)
	{
		$this->db->delete('pelanggan', $where);
	}

}

?>