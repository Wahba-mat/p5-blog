<?php


abstract class AbstractController
{
    protected function redirectTo($action, $params = null)
    {
        $url = 'index.php?p=' . $action;

        if($params){
            foreach($params as $key => $value){
                $url .= "&".$key."=".$value;
            }
        }

        header("Location: ".$url);
        die();
    }

    public function setFlash($message, $type = 'success')
    {
        $_SESSION["flash"] = ['message' =>$message, 'type'=> $type];
    }


    /**
     * @throws Exception
     */
    public function needAuthentication($isAdmin = false)
    {
        if(!isset($_SESSION['loggedin'])){
            throw new Exception("Vous devez être connecté pour effectuer cette action");
        }

        /** @var User $user */
        $user = unserialize($_SESSION['loggedin']);
        if($isAdmin){
            if($user->getUserType() != User::TYPE_ADMIN){
                throw new Exception("Vous n'avez pas les droits pour effectuer cette opération");
            }
        }

        return unserialize($_SESSION['loggedin']);

    }
}