<?php

class ModelReview extends CI_Model
{
    public function get()
    {
        $this->db->from("review");
        return $this->db->get();
    }
}

?>