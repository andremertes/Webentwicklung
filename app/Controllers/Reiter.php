<?php namespace App\Controllers;

use App\Models\ReiterModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Reiter extends BaseController
{

    public function __construct()
    {
        $this->RreiterModel = new ReiterModel();
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

            $reiterliste = $this->RreiterModel->getReiter($_SESSION['aktivesprojekt']);
            $data['reiterliste'] = $reiterliste;







            //var_dump($_POST);
            echo view('templates/head', $data);
            echo view('templates/jumbo', $data);


            echo view('templates/navigation', $data);


            echo view('pages/reiter', $data);


            echo view('templates/foot');
        }
    }

    //--------------------------------------------------------------------

}
