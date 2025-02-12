<?php
class User_model extends CI_Model {
    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function getUserByEmail($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function logLogin($user_id) {
        $data = array(
            'user_id' => $user_id,
            'ip_address' => $this->input->ip_address(),
            'user_agent' => $this->input->user_agent()
        );
        return $this->db->insert('login_logs', $data);
    }
}
?>
