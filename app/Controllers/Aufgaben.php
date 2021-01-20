<?php namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\PersonenModel;
use App\Models\ReiterModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Aufgaben extends BaseController
{

    public function __construct()
    {
        $this->AufgabenModel = new AufgabenModel();
        $this->PersonenModel = new PersonenModel();
        $this->ReiterModel = new ReiterModel();
    }

    public function aufgaben($page = 'aufgaben')
    {
        if ( !is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            // Keine Datei gefunden -> 404 Fehler
            throw new PageNotFoundException($page);
        }

        $aufgabenmodel = new AufgabenModel();

        $data['aufgabenliste'] = $aufgabenmodel->getData();
        $data['title'] = "Aufgaben";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }

    public function aufgaben_index()
    {
        $_POST['activeuser'] = $this->session->get('id');

        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/index');
        } else {
            $data['title'] = "Aufgaben";

            $data['sessionuserid'] = $this->session->get('id');
            $data['sessionusername'] = $this->session->get('username');

            $aufgabenliste = $this->AufgabenModel->getAufgaben($_SESSION['aktivesprojekt']);
            $data['aufgabenliste'] = $aufgabenliste;

            //var_dump($_POST);
            echo view('templates/head', $data);
            echo view('templates/jumbo', $data);

            echo view('templates/navigation', $data);

            // Soll edit aufgerufen oder eine Aufgabe gelöscht werden
            if (isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']) || isset($_POST['btnNeu']))
            {
                // Aufgabe löschen
                if (isset($_POST['btnLoeschen']))
                {
                    $data['reiterliste'] = $this->ReiterModel->getReiter($_SESSION['aktivesprojekt']);
                    $data['mitglieder'] = $this->PersonenModel->getPersonen();
                    $data['task'] = $this->AufgabenModel->getdeleteAufgabe($_POST['btnLoeschen']);
                    //var_dump($data['task']);
                    echo view('aufgaben/edit', $data);
                }
                // Aufgabe bearbeiten
                if (isset($_POST['btnBearbeiten']))
                {
                    $data['reiterliste'] = $this->ReiterModel->getReiter($_SESSION['aktivesprojekt']);
                    $data['mitglieder'] = $this->PersonenModel->getPersonen();
                    $data['task'] = $this->AufgabenModel->geteditAufgabe($_POST['btnBearbeiten']);                              //POST wird nicht an Model übertragen...
                    //var_dump($data['task']);
                    echo view('aufgaben/edit', $data);
                }
                // Aufgabe neu anlegen
                if (isset($_POST['btnNeu']))
                {
                    $data['reiterliste'] = $this->ReiterModel->getReiter($_SESSION['aktivesprojekt']);
                    $data['mitglieder'] = $this->PersonenModel->getPersonen();
                    $data['task'] = array('id' => '', 'bezeichnung' => '', 'beschreibung' => '', 'erstellungsdatum' => '', 'faelligkeitsdatum' => '', 'erstellerID' => '', 'reiterID' => '', 'zustaendig' => '');
                    echo view('aufgaben/edit', $data);
                }
            }

            // Ist edit aufgerufen worden
            if (isset($_POST['btnSpeichern']) || isset($_POST['btnAbbrechen']) || isset($_POST['btnBestaetigen']))
            {

                // Aufgabe ändern
                if (isset($_POST['btnSpeichern']))
                {

                    if ($_POST['AufgabeID'] != null){
                        $this->AufgabenModel->updateAufgabe($_POST['AufgabeID']);
                    }
                    // Aufgabe erstellen
                    else{
                        //var_dump($_POST['zustaendig']);
                        $this->AufgabenModel->createAufgabe($_POST['AufgabeID']);
                    }
                    $data['aufgabenliste'] = $this->AufgabenModel->getAufgaben();

                }
                // Aufgabe löschen
                elseif (isset($_POST['btnBestaetigen'])){
                    //var_dump($_POST['AufgabeID']);
                    $this->AufgabenModel->deleteAufgabe($_POST['AufgabeID']);
                    $data['aufgabenliste'] = $this->AufgabenModel->getAufgaben();
                }

            }

            // Soll nur die Liste angezeigt werden (also alle Aufgaben)
            if (!(isset($_POST['btnBearbeiten']) || isset($_POST['btnNeu']) || isset($_POST['btnLoeschen'])))
            {
                $data['aufgabenliste'] = $this->AufgabenModel->getAufgaben();
                echo view('aufgaben/aufgaben', $data);
            }

            echo view('templates/foot');
        }
    }

    //--------------------------------------------------------------------

}
