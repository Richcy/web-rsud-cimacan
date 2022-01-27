<?php 
class T_User extends CI_Model {

	
	public function show_all()
	{
    $query = $this->db->order_by('sort', 'ASC');
		$query = $this->db->get('t_user');
    return $query->result();
	}

  public function get_detail($user_name)
  {
    $query = $this->db->select('user.id, user.username, user.password, user.name, user.email, user.role, user.create_date, user.update_date, role.id as role_id, role.name as role_name');
    $query = $this->db->join('t_role as role', 'role.id = user.role', 'left');
    $query = $this->db->where('user.username', $user_name);
    $query = $query->limit(1);
    $query = $this->db->get('t_user as user');
    return $query->result();
  }

  public function insert($data,$table){
    $insert = $this->db->insert($table, $data);
    return $insert;
  }

  public function update($data, $id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->update('t_user', $data);
    return $query;
  }

  public function delete($id)
  {
    $query =  $this->db->where('id', $id);
    $query =  $this->db->delete('t_user');
    return $query;
  }

}
