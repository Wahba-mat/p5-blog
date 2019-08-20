<?php

require_once "controller/AbstractController.php";

class LogoutController extends AbstractController
{

    public function logout()
    {
        session_destroy();
        $this->redirectTo("index");

    }
}
