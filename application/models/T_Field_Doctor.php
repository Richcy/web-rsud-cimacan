<?php 
class T_Field_Doctor extends CI_Model {

	
	public function show_all()
	{
    $query = $this->db->order_by('name', 'ASC');
		$query = $this->db->get('t_field_doctor');
    return $query->result();
	}

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_field_doctor');
    return $query->result();
  }

  public function get_used($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('field', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_doctor');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_field_doctor', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_field_doctor');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_field_doctor');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_field_doctor');
    return $query;
  }

}
