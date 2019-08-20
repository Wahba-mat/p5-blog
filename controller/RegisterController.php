<?php


require_once "model/UsersManager.php";
require_once "controller/AbstractController.php";

class RegisterController extends AbstractController
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

    public function register()
    {
        $error ="";
        if (!empty($_POST)) {
            if ($_POST['password'] === $_POST['confirmPassword']) {
                $datas['username'] = $_POST['username'];
                $datas['password'] = $_POST['password'];
                $datas['email'] = $_POST['email'];
                $user = new User($datas);
                if ($user->isValid()) {
                    $result = $this->usersManager->add($user);
                    if ($result) {
                        $this->redirectTo("login");
                    } else {
                        echo "Vérifiez vos informations";

                    }
                }
            }else{
                $this->setFlash( "Les mots de passe ne sont pas identiques","danger");
            }

        }
        $view = new View("Register");
        $view->generate(array());
    }
}