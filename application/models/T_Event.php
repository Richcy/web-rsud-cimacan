<?php 
class T_Event extends CI_Model {

	private $itemPerPage = 6;


	public function show_all()
	{
    $query = $this->db->select('event.id, event.title, event.description, event.category, event.url, event.start_date, event.end_date, event.start_time, event.end_time, event.img, category.id as category_id, category.name as category_name');
    $query = $this->db->order_by('event.create_date', 'ASC');
    $query = $this->db->join('t_event_category as category', 'category.id = event.category', 'left');
		$query = $this->db->get('t_event as event');
    return $query->result();
	}

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_event');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_event', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_event');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_event');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_event');
    return $query;
  }

 // FE Section 
  public function getAll($category, $s)
  {
    $query = $this->db->select('event.id, event.title, event.description, event.category, event.url, event.start_date, event.end_date, event.start_time, event.end_time, event.img, category.id as category_id, category.name as category_name');
    $query = $this->db->order_by('event.start_date', 'DESC');
    $query = $this->db->join('t_event_category as category', 'category.id = event.category', 'left');
    $query =  $this->db->where('status', 'publish');
    if (!empty($category)) {
      $query =  $this->db->where('event.category', $category);
    }
    if (!empty($s)) {
      $query =  $this->db->like('event.title', $s);
    }
    $query = $this->db->get('t_event as event');
    return $query->result();
  }

  public function getPage($page, $category, $s)
  {
    $limitbefore = $page <= 1 ? 0 : ($page-1) * $this->itemPerPage;
    $query = $this->db->select('event.id, event.title, event.description, event.category, event.url, event.start_date, event.end_date, event.start_time, event.end_time, event.img, category.id as category_id, category.name as category_name');
    $query = $this->db->order_by('event.start_date', 'DESC');
    $query = $this->db->join('t_event_category as category', 'category.id = event.category', 'left');
    $query =  $this->db->where('status', 'publish');
    if (!empty($category)) {
      $query =  $this->db->where('event.category', $category);
    }
    if (!empty($s)) {
      $query =  $this->db->like('event.title', $s);
    }
    $query = $query->limit($this->itemPerPage, $limitbefore);
    $query = $this->db->get('t_event as event');
    return $query->result();
  }

  public function getTotal($category, $s)
  {
    $query = $this->db->select('count(id) as totalData');
    $query =  $this->db->where('status', 'publish');
    if (!empty($category)) {
      $query =  $this->db->where('event.category', $category);
    }
    if (!empty($s)) {
      $query =  $this->db->like('event.title', $s);
    }
    $query = $this->db->get('t_event as event');
    return $query->result();
  }

  public function getDetail($id)
  {
    $query = $this->db->select('event.id, event.title, event.description, event.category, event.url, event.start_date, event.end_date, event.start_time, event.end_time, event.img, category.id as category_id, category.name as category_name');
    $query = $this->db->join('t_event_category as category', 'category.id = event.category', 'left');
    $query = $this->db->where('event.id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_event as event');
    return $query->result();
  }

  public function getHome()
  {
    $query = $this->db->select('event.id, event.title, event.description, event.category, event.url, event.start_date, event.end_date, event.start_time, event.end_time, event.img, category.id as category_id, category.name as category_name');
    $query = $this->db->join('t_event_category as category', 'category.id = event.category', 'left');
    $query = $this->db->order_by('start_date', 'DESC');
    $query = $this->db->order_by('end_date', 'DESC');
    $query = $query->limit(4);
    $query = $this->db->get('t_event as event');
    return $query->result();
  }

}
