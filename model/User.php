<?php


class User 
{
    const TYPE_ADMIN = 1;
    const TYPE_USER = 0;

    private $id;
    private $username;
    private $email;
    private $password;
    private $userType;
    private $created;

    public function __construct($datas = [])
    {
        if (!empty($datas))
        {
            $this->hydrate($datas);
        }
    }

    public function hydrate($datas)
    {
        foreach ($datas as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (is_callable([$this, $method]))
            {
                $this->$method($value);
            }
        }
    }
    // Getters and Setters
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function getUserType()
    {
        return $this->userType;
    }

    public function getCreated()
    {
        return $this->created;
    }
    public function setId($id) 
    {
    	$this->id = $id;
    }
    public function setUsername($username) 
    {
    	$this->username = $username;
    }
    public function setEmail($email) 
    {
    	$this->email = $email;
    }
    public function setPassword($password) 
    {
    	$this->password = $password;
    }
    public function setUserType($userType)
    {
    	$this->userType = $userType;
    }
    public function setCreated($created)
    {
    	$this->created = $created;
    }

    public function isValid()
    {
        return strlen($this->username) >= 5;
    }
}