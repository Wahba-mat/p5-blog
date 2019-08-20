<?php
require_once "controller/AbstractController.php";
require_once 'model/ArticleManager.php';
require_once 'views/View.php';

class ArticleController extends AbstractController
{
    private $manager;

    public function __construct()
    {
        $this->manager = new ArticleManager();
    }

    // Afficher tous les articles
    public function listArticles()
    {
        $articles = $this->manager->getArticles();
        $view = new View("List");
        $view->generate(array('articles' => $articles));
    }

    // Afficher les détails d'un article
    public function article($id)
    {

        $article = $this->manager->getArticle($id);
        $view = new View("Article");
        $view->generate(array('article' => $article));
    }

    // Ajouter un article
    public function add()
    {
        $this->needAuthentication(true);

        if (!empty($_POST)) {
            $datas['author'] = $_POST['author'];
            $datas['title'] = $_POST['title'];
            $datas['chapo'] = $_POST['chapo'];
            $datas['content'] = $_POST['content'];

            $article = new Article($datas);
            $result = $this->manager->addArticle($article);
            if ($result) {
                $this->redirectTo("list");
            }
        }
        $view = new View("Add");
        $view->generate(array());
    }

    // Modifier un article
    public function edit($id)
    {
        $this->needAuthentication(true);
        $article = $this->manager->getArticle($id);

        if (!empty($_POST)) {
            $datas['id'] = $_POST['id'];
            $datas['author'] = $_POST['author'];
            $datas['title'] = $_POST['title'];
            $datas['chapo'] = $_POST['chapo'];
            $datas['content'] = $_POST['content'];

            $article = new Article($datas);

            $result = $this->manager->editArticle($article);
            if ($result) {
                header('Location: index.php?p=article&id=' . $article->getId());
            }
        }
        $view = new View("Edit");
        $view->generate(array('article' => $article));
    }

    // Supprimer un article
    public function delete($id)
    {
        $this->needAuthentication(true);
        $article = $this->manager->getArticle($id);

        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $result = $this->manager->deleteArticle($id);
            if ($result) {
                $this->redirectTo('list');
            }
        }
        $view = new View("Delete");
        $view->generate(array('article' => $article));
    }

    // Ajouter un commentaire
    public function addComment()
    {
        $user = $this->needAuthentication();
        if (isset($_POST['commentaire'])) {

            $datas['idArticle'] = $_GET['idArticle'];
            $datas['idUser'] = $user->getId();
            $datas['commentaire'] = $_POST['commentaire'];

            $comment = new Comment($datas);
            if ($comment->isValid()) {
                $result = $this->manager->postComment($comment);
                if ($result) {
                    $this->setFlash("Votre commentaire est en attente de validation");
                    $this->redirectTo("article", array('id' => $comment->getIdArticle()));
                }

            } else {
                throw new Exception("Les données saisies ne sont pas correctes");
            }
        }
        throw new Exception("Ajout du commentaire impossible");

    }

    // Supprimer un commentaire
    public function deleteComment($id)
    {
        $this->needAuthentication(true);
        $comment = $this->manager->getComment($id);

        $result = $this->manager->deleteComment($id);
        if ($result) {
            $this->redirectTo('listComment');
        } else {
            throw  new Exception("Ce commentaire n'existe pas");
        }

    }
}