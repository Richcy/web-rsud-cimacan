<?php 
class T_Admin extends CI_Model {

    public function show_all()
    {
        //$query = $this->db->order_by('sort', 'ASC');
        $query = $this->db->get('t_admin');
        return $query->result();
    }

    public function get_detail($username)
    {
        $this->db->select('admin.id, admin.username, admin.password, admin.name, admin.email, admin.role, admin.create_date, admin.update_date, role.id as role_id, role.name as role_name');
        $this->db->from('t_admin as admin');
        $this->db->join('t_role as role', 'role.id = admin.role', 'left');
        $this->db->where('admin.username', $username);
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert($data,$table){
        try {
            $insert = $this->db->insert($table, $data);
            return $insert;
        } catch (Exception $e) {
            log_message('error', 'Error inserting admin: '.$e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            $this->db->where('id', $id);
            $query =  $this->db->update('t_admin', $data);
            return $query;
        } catch (Exception $e) {
            log_message('error', 'Error updating admin: '.$e->getMessage());
            return false;
        }
    }

    public function last_number()
    {
        try {
            $query = $this->db->select('max(sort) as sort');
            $query = $this->db->get('t_admin');
            $query = $query->row(1);
            return $query;
        } catch (Exception $e) {
            log_message('error', 'Error getting last sort number: '.$e->getMessage());
            return false;
        }
    }

    public function update_sort($id, $sort)
    {
        try {
            $query =  $this->db->set('sort', $sort);
            $query =  $this->db->where('id', $id);
            $query =  $this->db->update('t_admin');
            return $query;
        } catch (Exception $e) {
            log_message('error', 'Error updating sort: '.$e->getMessage());
            return false;
        }
    }

    public function checkData($name)
  {
    $query = $this->db->select('*');
    $query = $this->db->where('name', $name);
    $query = $this->db->get('t_admin');
    return $query->result();
  }

    public function delete($id)
    {
        try {
            $query =  $this->db->where('id', $id);
            $query =  $this->db->delete('t_admin');
            return $query;
        } catch (Exception $e) {
            log_message('error', 'Error deleting admin: '.$e->getMessage());
            return false;
        }
    }
}
