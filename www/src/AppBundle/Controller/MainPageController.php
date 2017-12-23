<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 23.12.17
 * Time: 18:06
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function mainPageController(){
        return new Response("Hello World!");
    }

}