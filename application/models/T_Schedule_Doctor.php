<?php 
class T_Schedule_Doctor extends CI_Model {

	
	public function show_all()
	{
    $query = $this->db->select('doctor.id as doctor_id, doctor.name, doctor.office, doctor.experience, doctor.alumni, doctor.nip, doctor.str, doctor.img, schedule.id, schedule.doctor, schedule.senin, schedule.selasa, schedule.selasa, schedule.rabu, schedule.kamis, schedule.jumat, schedule.sabtu, schedule.minggu');
    $query = $this->db->order_by('doctor.name', 'ASC');
    $query = $this->db->join('t_doctor as doctor', 'doctor.id = schedule.doctor', 'left');
    $query = $this->db->get('t_schedule_doctor as schedule');
    return $query->result();
	}

  public function get_detail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('id', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_schedule_doctor');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_schedule_doctor', $data);
    return $query;
  }

  public function last_number()
  {
    $query = $this->db->select('max(sort) as sort');
    $query = $this->db->get('t_schedule_doctor');
    $query = $query->row(1);
    return $query;
  }

  public function update_sort($id, $sort)
  {
    $query =  $this->db->set('sort', $sort);
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_schedule_doctor');
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_schedule_doctor');
    return $query;
  }

  public function getDoctorDetail($id)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('doctor', $id);
    $query = $query->limit(1);
    $query = $this->db->get('t_schedule_doctor');
    return $query->result();
  }

}
