<?php 
class T_Career extends CI_Model {

	private $itemPerPage = 6;


	public function show_all()
	{
    $query = $this->db->select('*');
    $query = $this->db->order_by('create_date', 'DESC');
    $query = $this->db->order_by('status', 'ASC');
		$query = $this->db->get('t_career');
    return $query->result();
	}

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_career');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_career', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_career');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_career');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_career');
    return $query;
  }

 // FE Section 
  public function getAll($s)
  {
    $query = $this->db->select('*');
    $query = $this->db->order_by('create_date', 'DESC');
    $query =  $this->db->where('status', 'publish');
    if (!empty($s)) {
      $query =  $this->db->like('title', $s);
    }
    $query = $this->db->get('t_career');
    return $query->result();
  }

  public function getPage($page, $s)
  {
    $limitbefore = $page <= 1 ? 0 : ($page-1) * $this->itemPerPage;
    $query = $this->db->select('*');
    $query = $this->db->order_by('create_date', 'DESC');
    $query =  $this->db->where('status', 'publish');
    if (!empty($s)) {
      $query =  $this->db->like('title', $s);
    }
    $query = $query->limit($this->itemPerPage, $limitbefore);
    $query = $this->db->get('t_career');
    return $query->result();
  }

  public function getTotal($s)
  {
    $query = $this->db->select('count(id) as totalData');
    $query =  $this->db->where('status', 'publish');
    if (!empty($s)) {
      $query =  $this->db->like('career.title', $s);
    }
    $query = $this->db->get('t_career as career');
    return $query->result();
  }

  public function getDetail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_career');
    return $query->result();
  }

  public function getHome()
  {
    $query = $this->db->select('*');
    $query = $this->db->order_by('create_date', 'DESC');
    $query = $query->limit(4);
    $query = $this->db->get('t_career');
    return $query->result();
  }

}
