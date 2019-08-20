<?php
require_once 'model/User.php';
require_once 'model/Configuration.php';

class UsersManager
{
    private static $db;

    private function getDb()
    {
        if (self::$db === null) {
            // Récupération des paramètres de configuration de la base de données
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $pass = Configuration::get("pass");
            // Création de la connexion
            self::$db = new PDO($dsn, $login, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }

    public function login(User $user)
    {
        $request = $this->getDb()->prepare('SELECT id, password, username, user_type as userType FROM user WHERE username = :username');
        $request->bindValue(':username', $user->getUsername());
        $request->execute();

        if ($row = $request->fetch(PDO::FETCH_ASSOC)) {
            // Renvoi vrai si le mdp correspond
            if(password_verify($user->getPassword(), $row['password'])){
                return new User($row);
            }else{
                return false;
            }
        } else {
            throw  new Exception("Cette utilisateur n'existe pas");
        }
    }

    public function add(User $user)
    {
        $user->setPassword(password_hash($user->getPassword(), PASSWORD_DEFAULT));
        $request = $this->getDb()->prepare('INSERT INTO user(username, email, password, created_at) VALUES(:username, :email, :password, NOW())');
        $res = $request->execute(array(
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()));


        if ($res) {
            return $user;
        } else {
            throw new \Exception("Impossible d'ajouter cet utilisateur");
        }
    }

    public function delete($id)
    {
        $stmt = $this->getDb()->prepare('DELETE FROM user WHERE id = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return true;
    }

    public function getUsers()
    {
        $request = $this->getDb()->prepare('SELECT id, username, password, user_type, DATE_FORMAT(created_at, "%d/%m/%Y à %Hh%i") AS created FROM user');
        $request->execute();

        $users = [];
        while ($data = $request->fetch()) {
            $users[] = new User($data);
        }

        return $users;
    }

    public function getUser($id)
    {
        $request = $this->getDb()->prepare('SELECT id, username, password, user_type, created_at FROM user WHERE id = :id');
        $request->bindValue(':id', $id);
        $request->execute();

        if ($request->rowCount() == 1) {
            $data = $request->fetch(\PDO::FETCH_ASSOC);
            return new User($data);
        } else {
            throw new \Exception("Aucun utilisateur ne correspond à l'identifiant '$id'");
        }
    }

    public function adminUser($id)
    {
        $stmt = $this->getDb()->prepare('UPDATE user SET user_type = 1 WHERE id= :id');
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function memberUser($id)
    {
        $stmt = $this->getDb()->prepare('UPDATE user SET user_type = 0 WHERE id= :id');
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }


    public function updateUser(User $user)
    {
        $stmt = $this->getDb()->prepare('UPDATE user SET username= ?, email= ?, password= ?, user_type= ?, created_at= ? WHERE id = ?');
        $stmt->execute(array(
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()));
    }

    /* public function update(User $user)
    {
        $sql = 'UPDATE user SET username = ?, email = ?, password = ?, user_type = ?, created_at = ? WHERE id = ?';
        $this->executeRequest($sql, array($user->getUsername(), $user->getEmail(), $user->getPassword(), $user->getUserType(), $user->getCreated(), $user->getId() ));
    }
    */

    /*
        //a voir si je le garde ou pas
      public function getByUsername($username)
        {
            $sql = 'SELECT id, username, email, password, activated, user_type, created FROM user WHERE username = ?';
            $user = $this->executeRequest($sql, array($username));
            if ($user->rowCount() == 1)
            {
                $data = $user->fetch(\PDO::FETCH_ASSOC);
                return new User($data);
            }
            else
            {
                throw new \Exception("Aucun utilisateur ne correspond à l'username '$username'");
            }

        }
       */

}