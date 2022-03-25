<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController {
    function index(){
        return $this->render('base.html.twig');
    }

    function exemple(){
        return $this->render('exemple.html.twig');
    }
}