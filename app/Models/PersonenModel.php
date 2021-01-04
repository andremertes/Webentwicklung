<?php namespace App\Models;
use CodeIgniter\Model;

class PersonenModel extends Model
{

    public function login()
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
        $this->personen->where('mitglieder.username', $_POST['username']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    /*
    public function getPersonenselect($person_id = NULL)
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
         if ($person_id != NULL){
             $this->personen->where('mitglieder.id', $person_id);
         }
         $this->personen->orderBy('username');
         $result = $this->personen->get();

         if ($person_id != NULL)
             return $result->getRowArray();
         else
             return $result->getResultArray();
    }
    */

    public function getPersonen($person_id = NULL)
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');

        if ($person_id != NULL){
            $this->personen->where('mitglieder.id', $person_id);
        }

        $this->personen->orderBy('username');
        $result = $this->personen->get();

        if ($person_id != NULL){
            return $result->getRowArray();
        } else{
            return $result->getResultArray();
        }
    }

    public function createPerson()
    {
        $this->personen = $this->db->table('mitglieder');

        $password = $_POST['password'];
        $password_neu = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

        $this->personen->insert(array('username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password_neu, 'stadt' => $_POST['stadt'], 'postleitzahl' => $_POST['postleitzahl'], 'land' => $_POST['land']));
    }

    public function updatePerson($person_id = null)
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.id', $person_id);

        if ($_POST['password'] != null) {
            $password = $_POST['password'];
            $password_neu = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

            $this->personen->update(array('username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password_neu, 'stadt' => $_POST['stadt'], 'postleitzahl' => $_POST['postleitzahl'], 'land' => $_POST['land']));
        } else {
            $this->personen->update(array('username' => $_POST['username'], 'email' => $_POST['email'], 'stadt' => $_POST['stadt'], 'postleitzahl' => $_POST['postleitzahl'], 'land' => $_POST['land']));
        }
    }

    public function deletePerson($person_id = null)
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('id', $person_id);
        $this->personen->delete();
    }





    public function getData()
    {
        $result = $this->db->query('SELECT * FROM mitglieder');
        return $result->getResultArray();
    }

}
