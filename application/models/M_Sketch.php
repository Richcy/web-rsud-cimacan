<?php 
class M_Sketch extends CI_Model {

  
  public function show_sketch()
  {
    $query = $this->db->select('*');
    $query = $this->db->where('type', 'sketch');
    $query = $query->limit(1);
    $query = $this->db->get('t_image_profile');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_image_profile', $data);
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_gallery');
    return $query;
  }


  // Frontend section
  public function getAll()
  {
    $query = $this->db->select('*');
    $query = $this->db->where('type', 'sketch');
    $query = $query->limit(1);
    $query = $this->db->get('t_image_profile');
    return $query->result();
  }

}
