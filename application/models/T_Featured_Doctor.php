<?php 
class T_Featured_Doctor extends CI_Model {

	
	public function show_all()
	{
    $query = $this->db->select('doctor.id as doctor_id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.year, doctor.month, doctor.alumni, doctor.nip, doctor.str, doctor.img, fields.id as field_id, fields.name as field, featured.doctor as doctor_featured, featured.id');
    $query = $this->db->join('t_doctor as doctor', 'doctor.id = featured.doctor', 'left');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    $query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_featured_doctor as featured');
    return $query->result();
	}

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_featured_doctor');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_featured_doctor', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_featured_doctor');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_featured_doctor');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_featured_doctor');
    return $query;
  }

}
