<?php 
class T_Admin extends CI_Model {

	
	public function show_all()
	{
    $query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_admin');
    return $query->result();
	}

  public function get_detail($user_name)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('username', $user_name);
    $query = $query->limit(1);
    $query = $this->db->get('t_admin');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_admin', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_admin');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_admin');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_admin');
    return $query;
  }

}
