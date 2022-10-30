<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function save($data){
        $this->db->query("ALTER TABLE user AUTO_INCREMENT 1");
        $this->db->insert("user",$data);
    }

    public function getUsers(){
        $this->db->select("*");
        $this->db->from("user");
        $results=$this->db->get();
        return $results->result();
    }

    public function getUser($ID){
        $this->db->select("u.ID, u.FIRTS_NAME, u.LAST_NAME, u.EMAIL, u.GENDER, u.TELEPHONE, u.AGE");
        $this->db->from("user u");
        $this->db->where("u.ID",$ID);
        $result=$this->db->get();
        return $result->row();
    }

    public function update($data,$ID){
        $this->db->where("ID",$ID);
        $this->db->update("user",$data);
    }

    public function delete($ID){
        $this->db->where("ID",$ID);
        $this->db->delete("user");
    }
    
}
