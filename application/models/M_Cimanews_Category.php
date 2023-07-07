<?php 
class M_Cimanews_Category extends CI_Model {

	public function show_all(){
		$query = $this->db->order_by('name','ASC');
		$query = $this->db->where_not_in('name', 'cimanews');
		$query = $this->db->get('m_cimanews_category');
		return $query->result();
	}

	public function get_detail($id){
		$query = $this->db->select("*");
		$query = $this->db->where('id', $id);
		$query = $query->limit(1);
		$query = $this->db->get('m_cimanews_category');
		return $query->result();
	}

	public function get_used($id){
		$query = $this->db->select("*");
		$query = $this=>db->where('category', $id);
		$query = $query->limit(1);
		$query = $this->db->get('m_cimanews');
		return $query->result();
	}

	public function insert($data, $table){
		$insert = $this->db->insert($table, $data);
		return $insert;
	}

	public function update($data, $id){
		$query = $this->db->where('id', $id);
		$query = $this->db->update('m_cimanews_category',$data);
		return $query;
	}

	public function last_number(){
		$query = $this->db->select('max(sort) as sort');
		$query = $this->db->get('m_cimanews_category');
		$query = $query->row(1);
		return $query;
	}

	public function update_sort($id, $sort){
		$query = $this->db->set('sort', $sort);
		$query = $this->db->where('id', $id);
		$query = $this->db->update('m_cimanews_category');
		return $query;
	}

	public function delete($id){
		$query = $this->db->where('id', $id);
		$query = $this->db->delete('m_cimanews_category');
		return $query;
	}
}


 ?>