<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;



class OlaMundoController
{
    /**
     * @Route("/ola")
     */
    public function OlaMundoAction() {

        echo 'Olá Mundo!';
        exit();
    }
}