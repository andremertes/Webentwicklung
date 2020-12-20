<?php namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\ReiterModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class AktuellesProjekt extends BaseController
{

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

    //--------------------------------------------------------------------

}
