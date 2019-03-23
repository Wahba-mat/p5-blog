<?php

require_once 'model/ArticleManager.php';
require_once 'views/View.php';

class ArticleController
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
        if (!empty($_POST))
        {
            $datas['author'] = $_POST['author'];
            $datas['title'] = $_POST['title'];
            $datas['chapo'] = $_POST['chapo'];
            $datas['content'] = $_POST['content'];

            $article = new Article($datas);
            $result = $this->manager->addArticle($article);
            if($result)
            {
                header('Location: index.php?p=list');
            }
        }
        $view = new View("Add");
        $view->generate(array());
    }
    
    // Modifier un article
    public function edit($id)
    {
        $article = $this->manager->getArticle($id);
        
        if (!empty($_POST))
        {
            $datas['id'] = $_POST['id'];
            $datas['author'] = $_POST['author'];
            $datas['title'] = $_POST['title'];
            $datas['chapo'] = $_POST['chapo'];
            $datas['content'] = $_POST['content'];
            
            $article = new Article($datas);

            $result = $this->manager->editArticle($article);
            if($result)
            {
                header('Location: index.php?p=article&id=' . $article->getId());
            }
        }
        $view = new View("Edit");
        $view->generate(array('article' => $article));
    }
    
    // Supprimer un article
    public function delete($id)
    {
        $article = $this->manager->getArticle($id);
        
        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
            $result = $this->manager->deleteArticle($id);
            if($result)
            {
                header('Location: index.php?p=list');
            }
        }
        $view = new View("Delete");
        $view->generate(array('article' => $article));
    }
    
}
