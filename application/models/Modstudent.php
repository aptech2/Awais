<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modstudent extends CI_Model {

    public function logadmin($data)
    {
        return $this->db->get_where('studentlogin', $data)->result_array();
    }
}
?>
