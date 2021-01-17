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
            if($this->validation->run($_POST, 'personlogin')) {

                if ($this->PersonenModel->login() != NULL) {

                    $password = $this->PersonenModel->login()['password'];
                    if (password_verify($_POST['password'], $password)) {

                        $userdata = array(
                            'loggedin' => TRUE,
                            'id' => $this->PersonenModel->login()['id'],
                            'username' => $this->PersonenModel->login()['username'],
                            'email' => $this->PersonenModel->login()['email'],
                        );

                        $this->session->set($userdata);
                        return redirect()->to(base_url() . '/projekte/index_projekte');
                    }
                }

            } else {
                $data['error'] = $this->validation->getErrors();
            }
        }

        $data['title'] = "Login";

        echo view('templates/head', $data);
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
