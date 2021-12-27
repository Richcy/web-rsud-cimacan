<?php 
class T_Gallery extends CI_Model {

	
	public function getHome()
  {
    $query = $this->db->select('*');
    $query = $this->db->order_by('sort', 'create_date');
    $query = $this->db->get('t_gallery');
    return $query->result();
  }

}
