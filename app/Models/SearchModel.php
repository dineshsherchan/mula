<?php

namespace App\Models;

use CodeIgniter\Model;

class SearchModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getLanguage($str)
    {
        $this->db->select('id, lname as text');
        $this->db->like('lname', $str);
        $query = $this->db->get('tbl_language');
        return $query->result();
    }
}
