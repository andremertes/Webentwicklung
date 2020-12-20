<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Personen extends BaseController
{

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

    //--------------------------------------------------------------------

}
