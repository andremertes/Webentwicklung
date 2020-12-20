<?php namespace App\Models;
use CodeIgniter\Model;

class ProjekteModel extends Model
{

    public function getData()
    {
        $projekteresult = $this->db->query('SELECT * FROM projekte');
        return $projekteresult->getResultArray();
    }

}
