<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;

class Login extends BaseController
{


    public function __construct(){
        $this->PersonenModel = new PersonenModel();
    }

    public function index()
    {
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            if ($this->PersonenModel->login() != NULL)
            {
                $password = $this->PersonenModel->login()['password'];
                if (password_verify($_POST['password'], $password))
                {
                    $this->session->set('loggedin', TRUE);
                    return redirect()->to(base_url().'/personen/list_dyn');
                }
            }
        }

        $data['title'] = "Login";

        echo view('templates/head');
        echo view('templates/jumbo', $data);
        echo view('login');
        //echo view('pages/pwhasher');
        echo view('templates/foot');

    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url().'/login');
    }

    //--------------------------------------------------------------------

}
