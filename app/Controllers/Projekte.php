<?php namespace App\Controllers;

use App\Models\ProjekteModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Projekte extends BaseController
{

    public function projekte($page = 'projekte')
    {
        if ( !is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            // Keine Datei gefunden -> 404 Fehler
            throw new PageNotFoundException($page);
        }

        $projektemodel = new ProjekteModel();

        $data['projekteliste'] = $projektemodel->getData();

        $data['title'] = "Projekte";

        echo view('templates/head', $data);
        echo view('templates/jumbo', $data);
        echo view('templates/navigation', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/foot');
    }

    //--------------------------------------------------------------------

}
