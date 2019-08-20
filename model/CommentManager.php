<?php
error_reporting(E_ALL);

require_once 'model/Comment.php';
require_once 'model/Configuration.php';

class CommentManager
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
    


        
    public function postComment($comment)
    {
    $stmt = $this->getDb()->prepare('INSERT INTO comments (idArticle, pseudo, commentaire, created_at) VALUES(:idArticle, :pseudo, :commentaire, NOW())');
    $stmt->bindValue(':idArticle', $comment->getIdArticle());
    $stmt->bindValue(':pseudo', $comment->getPseudo());
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


    //Commentaire desactivé

    public function getAllValidated()
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

    //Commentaire activé
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
    


    public function getComment($id)
    {
        $stmt = $this->getDb()->prepare('SELECT *  FROM comments WHERE id= :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function validateComment($id)
    {
        $stmt = $this->getDb()->prepare('UPDATE comments SET isValidate = 1 WHERE id= :id');
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }


}
