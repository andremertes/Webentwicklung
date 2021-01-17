<?php namespace App\Controllers;

use App\Models\ProjekteModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Projekte extends BaseController
{

    public function __construct(){
        $this->ProjekteModel = new ProjekteModel();
    }

    public function projekte($page = 'projekte')
    {
        if ( !is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            // Keine Datei gefunden -> 404 Fehler
            throw new PageNotFoundException($page);
        }

        // $projektemodel = new ProjekteModel();

        $data['projekteliste'] = $this->ProjekteModel->getData($_POST['activeuser']);

        $data['title'] = "Projekte";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }

    public function index_projekte()
    {

        $_POST['activeuser'] = $this->session->get('id');

        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/index');
        } else {
            $data['title'] = "Projekte";
            $data['projekteliste'] = $this->ProjekteModel->getProjekte();

            $data['sessionuserid'] = $this->session->get('id');
            $data['sessionusername'] = $this->session->get('username');

            //var_dump($_POST);
            echo view('templates/head', $data);
            echo view('templates/jumbo', $data);

            if(isset($_POST['btnAuswaehlen']) && isset($_POST['projektID'])){

                $projektdaten = $this->ProjekteModel->selectProjekt($_POST['projektID']);

                $aktivesprojekt = $_POST['projektID'];

                $this->session->set('projektdaten', $projektdaten);
                $this->session->set('aktivesprojekt', $aktivesprojekt);
                //var_dump($this->session->get());
            }

            echo view('templates/navigation', $data);

            // Soll edit aufgerufen werden
            if (isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']))
            {
                // Projekt löschen
                if (isset($_POST['btnLoeschen']))
                {
                    $data['projekte'] = $this->ProjekteModel->geteditProjekt($_POST['btnLoeschen']);
                    echo view('projekte/edit', $data);
                }
                // Projekt bearbeiten
                if (isset($_POST['btnBearbeiten']))
                {
                    //var_dump($_POST['projektID']);
                    $data['projekte'] = $this->ProjekteModel->geteditProjekt($_POST['btnBearbeiten']);

                    //var_dump($data['projekte']);
                    echo view('projekte/projekte', $data);
                }
            }

            // Ist edit aufgerufen worden
            if (isset($_POST['btnSpeichern']) || isset($_POST['btnAbbrechen']) || isset($_POST['btnBestaetigen']))
            {

                // Projekt ändern
                if (isset($_POST['btnSpeichern']))
                {

                        if ($_POST['ProjektID'] != null){
                            $this->ProjekteModel->updateProjekt($_POST['ProjektID']);
                        }
                        // Projekt erstellen
                        else{
                            $this->ProjekteModel->createProjekt($_POST['ProjektID']);

                            //var_dump($this->ProjekteModel->createProjekt($_POST['ProjektID']));
                        }
                    $data['projekteliste'] = $this->ProjekteModel->getProjekte();

                }
                // Projekt löschen
                elseif (isset($_POST['btnBestaetigen'])){
                    $this->ProjekteModel->deleteProjekt($_POST['ProjektID']);
                    $data['projekteliste'] = $this->ProjekteModel->getProjekte();
                }

            }

            // Soll nur die Liste angezeigt werden (also alle Projekte)
            if (!(isset($_POST['btnBearbeiten']) || isset($_POST['btnNeu']) || isset($_POST['btnLoeschen'])))
            {
                $data['projekte'] = $this->ProjekteModel->getProjekte();
                echo view('projekte/projekte', $data);
            }

            echo view('templates/foot');
        }

    }

    //--------------------------------------------------------------------

}
