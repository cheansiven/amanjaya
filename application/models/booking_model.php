<?php

class Booking_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function find($id)
    {
        return
            $this->db
                ->where('id', $id)
                ->limit(1)
                ->get('booking');
    }

    public function create($data)
    {
        $this->db->insert('booking', $data);

        return $this->db->insert_id();
    }

}