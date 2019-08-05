<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Model {
    public function create() {

        $data = array(
            'email' => $this->input->post('email'),
            'is_subscribed' => 1,
        );

        $this->db->insert('subscribers', $data);

        return TRUE;
    }
}