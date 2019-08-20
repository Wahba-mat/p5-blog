<?php
error_reporting(E_ALL);

require_once 'model/Article.php';
require_once 'model/Comment.php';
require_once 'model/Configuration.php';

class ArticleManager
{
    private static $db;
    
    private function getDb()
    {
        if(self::$db === null)
        {
            // Récupération des paramètres de configuration de la base de données
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $pass = Configuration::get("pass");
            // Création de la connexion
            self::$db = new PDO($dsn, $login, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }
    
    public function getArticles()
    {
        $articles = [];
        $request = $this->getDb()->query('SELECT id, title, chapo, DATE_FORMAT(created_at, "%d/%m/%Y à %Hh%i") AS created, DATE_FORMAT(updated_at, "%d/%m/%Y à %Hh%i") AS updated FROM article ORDER BY updated_at DESC, id DESC');
        while ($datas = $request->fetch(PDO::FETCH_ASSOC))
        {
            $articles[] = new Article($datas);
        }
        $request->closeCursor();
        return $articles;
    }

    /**
     * @param $id
     * @return Article
     * @throws Exception
     */
    public function getArticle($id)
    {
        if ($this->exist($id))
        {
            $request = $this->getDb()->prepare('SELECT id, title, author, chapo, content, DATE_FORMAT(created_at, "%d/%m/%Y à %Hh%i") AS created, DATE_FORMAT(updated_at, "%d/%m/%Y à %Hh%i") AS updated FROM article WHERE id = ?');
            $request->execute(array($id));
            $article = new Article($request->fetch(PDO::FETCH_ASSOC));
            $article->setComments($this->getComments($id));
            return $article;
        }
        else
        {
            throw new Exception("Aucun article ne correspond à l'identifiant '$id'");
        }
    }

    public function getComments($id)
    {
        $comments = [];
        $request = $this->getDb()->prepare(
            'SELECT c.id as id, u.username as pseudo, idArticle, idUser, commentaire, DATE_FORMAT(c.created_at, "%d/%m/%Y à %Hh%i") AS created 
FROM comments as c
INNER JOIN user as u ON c.idUser = u.id
WHERE idArticle = ? AND c.isValidate = 1');
        $request->execute(array($id));
        while ($datas = $request->fetch(PDO::FETCH_ASSOC))
        {
            $comments[] = new Comment($datas);
        }
        $request->closeCursor();
        return $comments;
    }
        
    public function postComment($comment)
    {
    $stmt = $this->getDb()->prepare('INSERT INTO comments (idArticle, idUser, commentaire, created_at) VALUES(:idArticle, :idUser, :commentaire, NOW())');
    $stmt->bindValue(':idArticle', $comment->getIdArticle());
    $stmt->bindValue(':idUser', $comment->getIdUser());
    $stmt->bindValue(':commentaire', $comment->getCommentaire());
    $stmt->execute();
    $stmt->closeCursor();
    return $stmt;
    }


    public function deleteComment($id)
    {
        $stmt = $this->getDb()->prepare('DELETE FROM comments WHERE id= :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }


    public function getListComment($idArticle)
    {
        $comments = [];
        $request = $this->getDb()->prepare(
            'SELECT c.id as id, u.username as pseudo, idArticle, idUser, commentaire, isValidate, DATE_FORMAT(c.created_at, "%d/%m/%Y à %Hh%i") AS created 
FROM comments as c INNER JOIN user as u ON c.idUser = u.id WHERE isValidate = 1');

        $request->execute(array($idArticle));
        while ($datas = $request->fetch(PDO::FETCH_ASSOC))
        {
            $comments[] = new Comment($datas);
        }
        $request->closeCursor();
        return $comments;
    }

    //Commentaire desactivé

    public function getIsValidate()
    {
        $comments = [];
        $request = $this->getDb()->prepare('SELECT c.id as id, u.username as pseudo, idArticle, idUser, commentaire, isValidate, DATE_FORMAT(c.created_at, "%d/%m/%Y à %Hh%i") AS created 
FROM comments as c INNER JOIN user as u ON c.idUser = u.id WHERE isValidate = 0');
        $request->execute(array());
        while ($datas = $request->fetch(PDO::FETCH_ASSOC))
        {
            $comments[] = new Comment($datas);
        }
        $request->closeCursor();
        return $comments;
    }


    public function addArticle($article)
    {
        $stmt = $this->getDb()->prepare('INSERT INTO article (title, chapo, content, author, created_at, updated_at) VALUES (:title, :chapo, :content, :author, NOW(), NOW())');
        $stmt->bindValue(':title', $article->getTitle());
        $stmt->bindValue(':chapo', $article->getChapo());
        $stmt->bindValue(':content', $article->getContent());
        $stmt->bindValue(':author', $article->getAuthor());
        $stmt->execute();
        $stmt->closeCursor();
        return $stmt;
    }
    
    public function editArticle($article)
    {
        $stmt = $this->getDb()->prepare('UPDATE article SET title= :title, chapo= :chapo, content= :content, author= :author, updated_at= NOW() WHERE id = :id');
        $stmt->bindValue(':id', $article->getId());
        $stmt->bindValue(':title', $article->getTitle());
        $stmt->bindValue(':chapo', $article->getChapo());
        $stmt->bindValue(':content', $article->getContent());
        $stmt->bindValue(':author', $article->getAuthor());
        $stmt->execute();
        $stmt->closeCursor();
        return $stmt;
    }
    
    public function deleteArticle($id)
    {
        $stmt = $this->getDb()->prepare('DELETE FROM article WHERE id= :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }

    public function getComment($id)
    {
        $stmt = $this->getDb()->prepare('SELECT *  FROM comments WHERE id= :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    
    public function exist($id)
    {
        $stmt = $this->getDb()->prepare('SELECT title FROM article WHERE id = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
}
