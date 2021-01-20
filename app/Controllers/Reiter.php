<?php namespace App\Controllers;

use App\Models\ReiterModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Reiter extends BaseController
{

    public function __construct()
    {
        $this->ReiterModel = new ReiterModel();
    }

    public function reiter($page = 'reiter')
    {
        if ( !is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            // Keine Datei gefunden -> 404 Fehler
            throw new PageNotFoundException($page);
        }

        $reitermodel = new ReiterModel();

        $data['reiterliste'] = $reitermodel->getData();
        $data['title'] = "Reiter";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }

    public function reiter_index()
    {
        $_POST['activeuser'] = $this->session->get('id');

        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/index');
        } else {
            $data['title'] = "Reiter";

            $data['sessionuserid'] = $this->session->get('id');
            $data['sessionusername'] = $this->session->get('username');

            /*
            $reitermodel = new ReiterModel();
            $data['reiterliste'] = $reitermodel->getData();
            */

            $reiterliste = $this->ReiterModel->getReiter($_SESSION['aktivesprojekt']);
            $data['reiterliste'] = $reiterliste;

            //var_dump($_POST);
            echo view('templates/head', $data);
            echo view('templates/jumbo', $data);

            echo view('templates/navigation', $data);

            // Soll edit aufgerufen oder Reiter gelöscht werden
            if (isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']))
            {
                // Reiter löschen
                if (isset($_POST['btnLoeschen']))
                {
                    $aufgaben = $this->ReiterModel->proofdelete($_POST['btnLoeschen']);

                    if(empty($aufgaben)){
                        $this->ReiterModel->deleteReiter($_POST['btnLoeschen']);

                        $data['reiterliste'] = $this->ReiterModel->getReiter();
                    } else {
                        //var_dump($aufgaben);

                        $data['warning'] = 1;
                    }
                    echo view('pages/reiter', $data);

                }
                // Reiter bearbeiten
                if (isset($_POST['btnBearbeiten']))
                {
                    $data['reiterwahl'] = $this->ReiterModel->geteditReiter($_POST['btnBearbeiten']);

                    echo view('pages/reiter', $data);
                }
            }

                // Reiter ändern
                if (isset($_POST['btnSpeichern']))
                {

                    if ($_POST['ReiterID'] != null){
                        $this->ReiterModel->updateReiter($_POST['ReiterID']);
                    }
                    // Reiter erstellen
                    else{
                        $this->ReiterModel->createReiter($_POST['ReiterID']);

                        //var_dump($this->ProjekteModel->createProjekt($_POST['ProjektID']));
                    }
                    $data['reiterliste'] = $this->ReiterModel->getReiter();

                }

            // Soll nur die Liste angezeigt werden (also alle Reiter)
            if (!(isset($_POST['btnBearbeiten']) || isset($_POST['btnNeu']) || isset($_POST['btnLoeschen'])))
            {
                $data['reiter'] = $this->ReiterModel->getReiter();
                echo view('pages/reiter', $data);
            }

            //echo view('pages/reiter', $data);

            echo view('templates/foot');
        }
    }

    //--------------------------------------------------------------------

}
