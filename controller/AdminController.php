<?php

require_once "controller/AbstractController.php";
require_once 'model/UsersManager.php';
require_once 'views/View.php';
require_once 'model/ArticleManager.php';
require_once 'model/CommentManager.php';


class AdminController extends AbstractController
{
    private $userManager;
    private $commentManager;

    public function __construct()
    {
        $this->userManager = new UsersManager();
        $this->commentManager = new CommentManager();
    }

    public function admin()
    {
        $this->needAuthentication();
        $view = new View("Admin");
        $view->generate(array());
    }

// Afficher tous les utilisateurs
    public function listUser()
    {
        $this->needAuthentication(true);
        $users = $this->userManager->getUsers();
        $view = new View("ListUser");
        $view->generate(array('users' => $users));
    }

// Supprimer un utilisateur
    public function deleteUser($id)
    {
        $this->needAuthentication(true);;
        $this->userManager->getUser($id);

        $this->userManager->delete($id);
        $this->redirectTo('listUser');

    }

   public function editUser($id)
   {
       {
           $this->needAuthentication();
           $this->userManager->getUser($id);

           if (!empty($_POST)) {
               $datas['id'] = $_POST['id'];
               $datas['user_type'] = $_POST['user_type'];
               $datas['password'] = $_POST['password'];
               $datas['username'] = $_POST['username'];

               $user = new User($datas);

               $result = $this->userManager->updateUser($user);
               if ($result) {
                   header('Location: index.php?p=user&id=' . $user->getId());
               }
           }

           $view = new view ("EditUser");
           $view->generate(array('user'));
       }
   }

    public function groupAdmin($id)
    {
        $this->userManager->adminUser($id);
        $this->redirectTo('listUser');
    }

    public function groupMember($id)
    {
        $this->userManager->memberUser($id);
        $this->redirectTo('listUser');
    }

    public function listComment()
    {
        $this->needAuthentication(true);
        $comments = $this->commentManager->getAllValidated();
        $view = new view ("listComment");
        $view->generate(array('comments' => $comments));
    }

    // 0=désactivé et 1= activé
    public function enableComment($id)
    {
        $this->needAuthentication(true);
        $comment = $this->commentManager->getComment($id);
        $result = $this->commentManager->validateComment($id);
        if ($result)
        {
            $this->redirectTo('article', [
                'id' => $comment['idArticle']

            ]);
        }
    }
        

}