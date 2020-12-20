<?php namespace App\Models;
use CodeIgniter\Model;

class PersonenModel extends Model
{

    public function getData()
    {
        $result = $this->db->query('SELECT * FROM mitglieder');
        return $result->getResultArray();
    }

}
