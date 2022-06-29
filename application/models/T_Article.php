<?php 
class T_Article extends CI_Model {

	private $itemPerPage = 6;


	public function show_all()
	{
    $query = $this->db->select('article.id, article.title, article.sub_desc, article.description, article.author, article.category, article.create_date, article.update_date, article.img, category.id as category_id, category.name as category_name');
    $query = $this->db->order_by('article.create_date', 'ASC');
    $query = $this->db->join('t_article_category as category', 'category.id = article.category', 'left');
		$query = $this->db->get('t_article as article');
    return $query->result();
	}

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_article');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_article', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_article');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_article');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_article');
    return $query;
  }

 // FE Section 
  public function getAll($category, $s)
  {
    $query = $this->db->select('article.id, article.title, article.sub_desc, article.description, article.author, article.category, article.create_date, article.update_date, article.img, category.id as category_id, category.name as category_name');
    $query = $this->db->order_by('article.create_date', 'DESC');
    $query = $this->db->join('t_article_category as category', 'category.id = article.category', 'left');
    $query =  $this->db->where('status', 'publish');
    if (!empty($category)) {
      $query =  $this->db->where('article.category', $category);
    }
    if (!empty($s)) {
      $query =  $this->db->like('article.title', $s);
    }
    $query = $this->db->get('t_article as article');
    return $query->result();
  }

  public function getPage($page, $category, $s)
  {
    $limitbefore = $page <= 1 ? 0 : ($page-1) * $this->itemPerPage;
    $query = $this->db->select('article.id, article.title, article.sub_desc, article.description, article.author, article.category, article.create_date, article.update_date, article.img, category.id as category_id, category.name as category_name');
    $query = $this->db->order_by('article.create_date', 'DESC');
    $query = $this->db->join('t_article_category as category', 'category.id = article.category', 'left');
    $query =  $this->db->where('status', 'publish');
    if (!empty($category)) {
      $query =  $this->db->where('article.category', $category);
    }
    if (!empty($s)) {
      $query =  $this->db->like('article.title', $s);
    }
    $query = $query->limit($this->itemPerPage, $limitbefore);
    $query = $this->db->get('t_article as article');
    return $query->result();
  }

  public function getTotal($category, $s)
  {
    $query = $this->db->select('count(id) as totalData');
    $query =  $this->db->where('status', 'publish');
    if (!empty($category)) {
      $query =  $this->db->where('article.category', $category);
    }
    if (!empty($s)) {
      $query =  $this->db->like('article.title', $s);
    }
    $query = $this->db->get('t_article as article');
    return $query->result();
  }

  public function getDetail($id)
  {
    $query = $this->db->select('article.id, article.title, article.sub_desc, article.description, article.author, article.category, article.create_date, article.update_date, article.img, category.id as category_id, category.name as category_name');
    $query = $this->db->join('t_article_category as category', 'category.id = article.category', 'left');
    $query = $this->db->where('article.id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_article as article');
    return $query->result();
  }

  public function getHome()
  {
    $query = $this->db->select('article.id, article.title, article.sub_desc, article.description, article.author, article.category, article.create_date, article.update_date, article.img, category.id as category_id, category.name as category_name');
    $query = $this->db->join('t_article_category as category', 'category.id = article.category', 'left');
    $query = $this->db->order_by('start_date', 'DESC');
    $query = $this->db->order_by('end_date', 'DESC');
    $query = $query->limit(4);
    $query = $this->db->get('t_article as article');
    return $query->result();
  }

}
