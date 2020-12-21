<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Personen extends BaseController
{

    public function __construct()
    {

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

    public function index_dyn()
    {
        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/index');
        } else {
            $data['title'] = "Tabelle";
            $data['personen'] = $this->PersonenModel->getPersonen();

            echo view('templates/head');
            echo view('personen/list_dyn', $data);
            echo view('templates/foot');
        }
    }

    public function index_edit()
    {
        $data['title'] = 'Personendaten';
        echo view('templates/head');

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
            if ($_POST['btnSpeichern'])
            {
                if ($_POST['PersonenID'] != null){
                    $this->PersonenModel->updatePerson($_POST['PersonenID']);
                }
                // Person erstellen
                else{
                    $this->PersonenModel->createPerson($_POST['PersonenID']);
                }
            }
            // Person löschen
            elseif (isset($_POST['btnBestaetigen'])){
                $this->PersonenModel->deletePerson($_POST['PersonenID']);
            }
        }
    }

    /*
    public function personen($page = 'personen')
    {
        if ( !is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            // Keine Datei gefunden -> 404 Fehler
            throw new PageNotFoundException($page);
        }

        $persmodel = new PersonenModel();

        $data['personenliste'] = $persmodel->getData();
        $data['title'] = "Personen";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }
    */

    //--------------------------------------------------------------------

}
