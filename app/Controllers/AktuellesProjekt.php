<?php namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\ProjekteModel;
use App\Models\ReiterModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class AktuellesProjekt extends BaseController
{

    public function __construct(){
        $this->AufgabenModel = new AufgabenModel();
        $this->ProjekteModel = new ProjekteModel();
        $this->ReiterModel = new ReiterModel();
    }

    public function aktuellesProjekt($page = 'aktuellesProjekt')
    {
        if ( !is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            // Keine Datei gefunden -> 404 Fehler
            throw new PageNotFoundException($page);
        }

        $aufgabenmodel = new AufgabenModel();
        $reitermodel = new ReiterModel();

        $data['aufgabenliste'] = $aufgabenmodel->getData();
        $data['reiterliste'] = $reitermodel->getData();
        $data['title'] = "Aktuelles Projekt";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }

    public function aktuelles_index()
    {
        $_POST['activeuser'] = $this->session->get('id');

        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/index');
        } else {
            $data['title'] = "Aktuelles Projekt";

            $data['sessionuserid'] = $this->session->get('id');
            $data['sessionusername'] = $this->session->get('username');

            //$data['aufgabenliste'] = $aufgabenmodel->getData();
            //$data['reiterliste'] = $reitermodel->getData();

            $data['aufgabenliste'] = $this->AufgabenModel->getAufgaben();
            $data['reiterliste'] = $this->ReiterModel->getReiter();

            //var_dump($_POST);
            echo view('templates/head', $data);
            echo view('templates/jumbo', $data);

            echo view('templates/navigation', $data);





            echo view('pages/aktuellesProjekt', $data);

            echo view('templates/foot');
        }

    }

    //--------------------------------------------------------------------

}
