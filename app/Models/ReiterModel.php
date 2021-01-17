<?php namespace App\Models;
use CodeIgniter\Model;

class ReiterModel extends Model
{

    public function getData()
    {
        $result = $this->db->query('SELECT * FROM reiter');
        return $result->getResultArray();
    }

    public function getReiter()
    {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('*');
        $this->reiter->where('projektID', $_SESSION['aktivesprojekt']);
        $result = $this->reiter->get();

        return $result->getResultArray();
    }

}
