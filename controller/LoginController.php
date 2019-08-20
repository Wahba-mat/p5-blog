<?php

require_once "model/UsersManager.php";
require_once "controller/AbstractController.php";

class LoginController extends AbstractController
{
    /**
     * @var UsersManager
     */
    private $usersManager;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->usersManager = new UsersManager();
    }

    public function login()
    {

        if(isset($_POST['submitted']))
        {
            $datas['username'] = $_POST['username'];
            $datas['password'] = $_POST['password'];

            $user = new User($datas);
            $result = $this->usersManager->login($user);
            if($result)
            {
                $this->setFlash("Vous êtes connecté");
                $result->setPassword(null);
                $_SESSION['loggedin'] = serialize($result);

                $this->redirectTo("admin");
            } else {
                throw new Exception("Identifiant et/ou mot de passe incorrect");

            }
         }

        $view = new View("Login");
        $view->generate(array());
    }


}