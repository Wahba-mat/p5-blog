<?php

require_once 'controller/ArticleController.php';
require_once 'controller/LoginController.php';
require_once 'controller/RegisterController.php';
require_once 'controller/LogoutController.php';
require_once 'controller/AdminController.php';


class Router
{
    /**
     * @var ArticleController
     */
    private $ctrlArticle;
    /**
     * @var LoginController
     */
    private $ctrlLogin;

    /** @var RegisterController  */
    private $ctrlRegister;

    /**
     * @var LogoutController
     */
    private $ctrlLogout;

    /** @var AdminController  */
    private $ctrlAdminController;


    public function __construct()
    {
        $this->ctrlArticle = new ArticleController();
        $this->ctrlLogin = new LoginController();
        $this->ctrlRegister = new RegisterController();
        $this->ctrlLogout = new LogoutController();
        $this->ctrlAdminController = new AdminController();

    }

    // Route une requête entrante
    public function routerRequest()
    {
        try {
            $action = $_GET['p'] ?? "default";
            switch ($action) {

                case "list":
                    $this->ctrlArticle->listArticles();
                    break;

                case "article":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlArticle->article($id);
                    } else {
                        throw new Exception("Identifiant d'article non valide");
                    }
                    break;

                case "add":
                    $this->ctrlArticle->add();
                    break;

                case "edit":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlArticle->edit($id);
                    } else {
                        throw new Exception("Identifiant d'article non valide");
                    }
                    break;

                case "delete":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlArticle->delete($id);
                    } else {
                        throw new Exception("Identifiant d'article non valide");
                    }
                    break;

                case "addComment":
                    if ($_GET['idArticle']) {
                        $this->ctrlArticle->addComment();
                    } else {
                        throw new Exception("Identifiant d'article non valide");
                    }
                    break;

                case "deleteComment":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlArticle->deleteComment($id);
                    } else {
                        throw new Exception("Identifiant de commentaire non valide");
                    }
                    break;


                case "login":
                    $this->ctrlLogin->login();
                    break;

                case "register":
                    $this->ctrlRegister->register();
                    break;

                case "logout":
                    $this->ctrlLogout->logout();
                    break;

                case "admin":
                    $this->ctrlAdminController->admin();
                    break;

                case "listUser":
                    $this->ctrlAdminController->listUser();
                    break;

                case "deleteUser":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlAdminController->deleteUser($id);
                    } else {
                        throw new Exception("Identifiant d'utilisateur non valide");
                    }
                    break;

                case "editUser":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlAdminController->editUser($id);
                    } else {
                        throw new Exception("Username non valide");
                    }
                    break;

                case "listComment":
                    $this->ctrlAdminController->listComment();
                    break;

                case "validateComment":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlAdminController->enableComment($id);
                    } else {
                        throw new Exception("Commentaire inexistant ");
                    }
                    break;

                case "adminUser":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlAdminController->groupAdmin($id);
                    } else {
                        throw new Exception("Groupe inexistant ");
                    }
                    break;

                case "memberUser":
                    $id = intval($this->getParam($_GET, 'id'));
                    if ($id != 0) {
                        $this->ctrlAdminController->groupMember($id);
                    } else {
                        throw new Exception("Groupe inexistant ");
                    }
                    break;



                default:
                    $this->home(); // aucune action définie : affichage de l'accueil
            }
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

// Affiche page d'accueil
    private
    function home()
    {
        $view = new View("Home");
        $view->generate(array());
    }

// Affiche une erreur
    private
    function error($msgError)
    {
        $view = new View("Error");
        $view->generate(array('msgError' => $msgError));
    }

    public
    function getParam($array, $name)
    {
        if (isset($array[$name])) {
            return $array[$name];
        } else {
            throw new Exception("Paramètre '$name' absent.");
        }
    }

}
