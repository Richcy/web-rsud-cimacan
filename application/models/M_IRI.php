<?php 
class M_IRI extends CI_Model {

	
	public function show_iri()
	{
    $query = $this->db->select('*');
    $query = $this->db->where('type', 'iri');
    $query = $query->limit(1);
		$query = $this->db->get('t_service');
    return $query->result();
	}

  public function show_gallery()
  {
    $query = $this->db->select('*');
    $query = $this->db->where('type', 'iri');
    $query = $this->db->order_by('sort', 'ASC');
    $query = $this->db->get('t_gallery');
    return $query->result();
  }

  public function show_sub_menu($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('service_id', $id);
    $query = $this->db->order_by('title', 'ASC');
    $query = $this->db->get('t_sub_service');
    return $query->result();
  }

  public function get_detail_gallery($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_gallery');
    return $query->result();
  }

  public function detail_sub_menu($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_sub_service');
    return $query->result();
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->where('type', 'iri');
    $query = $this->db->get('t_gallery');
    $query = $query->row(1);
    return $query;
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function insert_gallery($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_service', $data);
    return $query;
  }

  public function update_sub_menu($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_sub_service', $data);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_gallery');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_gallery');
    return $query;
  }

  public function delete_sub_menu($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_sub_service');
    return $query;
  }

}
