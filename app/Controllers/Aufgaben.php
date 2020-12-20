<?php namespace App\Controllers;

use App\Models\AufgabenModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Aufgaben extends BaseController
{

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

    //--------------------------------------------------------------------

}
