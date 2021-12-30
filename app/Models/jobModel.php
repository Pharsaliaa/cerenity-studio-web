<?php namespace App\Models;
use CodeIgniter\Model;

class jobModel extends Model{
    
    public function getData(){
        return $this->db->table('proposal')->get()->getResultArray();
    }

    public function addData($data){
        return $this->db->table('proposal')->insert($data);
    }

    public function editData($proposal_id){
        return $this->db->table('proposal')->where('proposal_id', $proposal_id)->get()->getRowArray();
    }

    public function updateData($data, $proposal_id){
        return $this->db->table('proposal')->update($data, array('proposal_id' => $proposal_id));
    }

    public function deleteData($proposal_id){
        return $this->db->table('proposal')->delete(array('proposal_id' => $proposal_id));
    }
}