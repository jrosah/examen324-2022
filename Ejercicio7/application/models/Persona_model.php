<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model {

	public function guardar($data) {
        $this->db->query("ALTER TABLE persona AUTO_INCREMENT 1");
        $this->db->insert("persona", $data);
    }

    public function update($data, $id) {
        $this->db->where("ci",$id);
        $this->db->update("persona", $data);
    }

    public function delete($id) {
        $this->db->where("ci",$id);
        $this->db->delete("persona");
    }

    public function getPersona() {
        $this->db->select("*");
        $this->db->from("persona");
        $results=$this->db->get();
        return $results->result();
    }

    public function getPerson($ci) {
        $this->db->select("xp.*");
        $this->db->from("persona xp");
        $this->db->where("xp.ci",$ci);
        $results=$this->db->get();
        return $results->row();
    }

}
