<?php

class Personel_model extends CI_Model
{
	public function personelList () {
		return $this->db->get('personel')->result();
	}
	public function deletePersonel ($id) {
			return $this->db->where('id',$id)->delete('personel');
	}
	public function insertPersonel ($data) {
		return $this->db->insert('personel',$data);
	}
	public function getPerson ($id) {
		return $this->db->where('id',$id)->get('personel')->result();
	}
	public function updatePerson ($data) {
		$id = $data['id'];
		return $this->db->where('id',$id)->update('personel',$data);
	}
}
