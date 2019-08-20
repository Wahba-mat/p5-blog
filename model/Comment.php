<?php



class Comment
{
	private $id;
    private $idArticle;
    private $idUser;
    private $pseudo;
    private $commentaire;
    private $created;
    private $isValidate;

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
    public function getIdArticle()
    {
        return $this->idArticle;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    public function getCommentaire()
    {
        return $this->commentaire;
    }

     public function getCreated()
    {
        return $this->created;
    }

    public function getIsValidate()
    {
        return $this->isValidate;
    }

    public function setIsValidate($isValidate)
    {
        $this->isValidate = $isValidate;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }
     
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
    
    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setCommentaire($commentaire)
    {
       $this->commentaire = $commentaire;
    }


    public function isValid(){
        // TODO controler la taille du commentaire
        return strlen(trim($this->commentaire)) >= 3 ;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser): void
    {
        $this->idUser = $idUser;
    }

}
    