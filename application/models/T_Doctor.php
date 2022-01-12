<?php 
class T_Doctor extends CI_Model {

	private $itemPerPage = 8;


	public function show_all()
	{
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.year, doctor.month, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->order_by('name', 'ASC');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
		$query = $this->db->get('t_doctor as doctor');
    return $query->result();
	}

  public function show_all_empty_schedule($id)
  {
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    if (!empty($id)) {
      $query = $this->db->where_not_in('doctor.id', $id); 
    }
    $query = $this->db->order_by('name', 'ASC');
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
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
    $query =  $this->db->update('t_doctor', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_doctor');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_doctor');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_doctor');
    return $query;
  }

  public function checkData($sip, $nip)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('sip', $sip);
    // $query = $this->db->or_where('nip', $nip);
    $query = $this->db->get('t_doctor');
    return $query->result();
  }

  public function checkDataEM($sip, $nip, $id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where_not_in('id', $id);
    // $query = $this->db->group_start();
    $query = $this->db->where('sip', $sip);
    // $query = $this->db->or_where('nip', $nip);
    // $query = $this->db->group_end();
    $query = $this->db->get('t_doctor');
    return $query->result();
  }

 // FE Section 
  public function getAll($field, $s)
  {
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.year, doctor.month, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->order_by('name', 'ASC');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    $query =  $this->db->where('status', 'publish');
    if (!empty($field)) {
      $query =  $this->db->where('doctor.field', $field);
    }
    if (!empty($s)) {
      $query =  $this->db->like('doctor.name', $s);
    }
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

  public function getPage($page, $field, $s)
  {
    $limitbefore = $page <= 1 ? 0 : ($page-1) * $this->itemPerPage;
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.year, doctor.month, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->order_by('name', 'ASC');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    $query =  $this->db->where('status', 'publish');
    if (!empty($field)) {
      $query =  $this->db->where('doctor.field', $field);
    }
    if (!empty($s)) {
      $query =  $this->db->like('doctor.name', $s);
    }
    $query = $query->limit($this->itemPerPage, $limitbefore);
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

  public function getTotal($field, $s)
  {
    $query = $this->db->select('count(id) as totalData');
    $query =  $this->db->where('status', 'publish');
    if (!empty($field)) {
      $query =  $this->db->where('doctor.field', $field);
    }
    if (!empty($s)) {
      $query =  $this->db->like('doctor.name', $s);
    }
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

  public function getDetail($id)
  {
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    $query = $this->db->where('doctor.id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

  public function getHome()
  {
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    $query = $this->db->order_by('name', 'ASC');
    $query = $query->limit(4);
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

  public function getOther($id)
  {
    $query = $this->db->select('doctor.id, doctor.name, doctor.field, doctor.office, doctor.experience, doctor.year, doctor.month, doctor.alumni, doctor.nip, doctor.str, doctor.sip, doctor.img, fields.id as field_id, fields.name as field');
    $query = $this->db->order_by('name', 'ASC');
    $query = $this->db->join('t_field_doctor as fields', 'fields.id = doctor.field', 'left');
    $query =  $this->db->where('status', 'publish');
    $query = $this->db->where_not_in('doctor.id', $id); 
    $query = $query->limit(4);
    $query = $this->db->get('t_doctor as doctor');
    return $query->result();
  }

}
