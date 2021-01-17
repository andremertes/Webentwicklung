<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Personen extends BaseController
{

    public function __construct()
    {
        $this->PersonenModel = new PersonenModel();
        // $validation = \Config\Services::validation();
    }

    public function index($page = 'personen')
    {
        $persmodel = new PersonenModel();

        $data['personenliste'] = $persmodel->getData();
        $data['title'] = "Personen";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }

    public function index_personen()
    {
        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/index');
        } else {
            $data['title'] = "Mitglieder";
            $data['personen'] = $this->PersonenModel->getPersonen();

            $data['sessionuserid'] = $this->session->get('id');
            $data['sessionusername'] = $this->session->get('username');

            //var_dump($_POST);
            echo view('templates/head', $data);
            echo view('templates/jumbo', $data);
            echo view('templates/navigation', $data);
            //echo view('personen/personen', $data);

            // Soll edit aufgerufen werden
            if (isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']) || isset($_POST['btnNeu']))
            {
                // Person löschen
                if (isset($_POST['btnLoeschen']))
                {
                    $data['personen'] = $this->PersonenModel->getpersonen($_POST['btnLoeschen']);
                    echo view('personen/edit', $data);
                }
                // Personen bearbeiten
                if (isset($_POST['btnBearbeiten']))
                {
                    $data['personen'] = $this->PersonenModel->getpersonen($_POST['btnBearbeiten']);
                    echo view('personen/edit', $data);
                }
                // Person neu anlegen
                if (isset($_POST['btnNeu']))
                {
                    $data['personen'] = array('id' => '', 'username' => '', 'email' => '', 'password' => '', 'stadt' => '', 'postleitzahl' => '', 'land' => '');
                    echo view('personen/edit', $data);
                }
            }

            // Ist edit aufgerufen worden
            if (isset($_POST['btnSpeichern']) || isset($_POST['btnBestaetigen']) || isset($_POST['btnAbbrechen']))
            {

                // Person ändern
                if (isset($_POST['btnSpeichern']))
                {

                    if($this->validation->run($_POST, 'personbearbeiten')){

                        if ($_POST['PersonenID'] != null){
                            $this->PersonenModel->updatePerson($_POST['PersonenID']);
                        }
                        // Person erstellen
                        else{
                            $this->PersonenModel->createPerson($_POST['PersonenID']);
                        }

                    } else {

                        // Fehlermeldung generieren
                        $data['personen'] = $_POST;
                        $data['error'] = $this->validation->getErrors();
                        echo view('personen/edit', $data);

                        //var_dump($_POST);
                        //var_dump($this->validation->getErrors());

                    }

                }
                // Person löschen
                elseif (isset($_POST['btnBestaetigen'])){
                    $this->PersonenModel->deletePerson($_POST['PersonenID']);
                }
            }

            // Soll nur die Liste angezeigt werden (also alle Personen)
            if (!(isset($_POST['btnBearbeiten']) || isset($_POST['btnNeu']) || isset($_POST['btnLoeschen']) || isset($data['error'])))
            {
                $data['personen'] = $this->PersonenModel->getPersonen();
                echo view('personen/personen', $data);
            }

            echo view('templates/foot');
        }

    }

    //--------------------------------------------------------------------

}
