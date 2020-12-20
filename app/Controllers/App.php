<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class App extends BaseController
{

    public function hey()
    {

        header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");

    }

    //--------------------------------------------------------------------

}
