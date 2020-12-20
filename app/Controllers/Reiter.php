<?php namespace App\Controllers;

use App\Models\ReiterModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Reiter extends BaseController
{

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

    //--------------------------------------------------------------------

}
