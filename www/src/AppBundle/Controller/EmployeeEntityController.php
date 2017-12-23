<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EmployeeEntityController extends Controller
{
    /**
     * @Route("/employee/{empName}")
     *
     */
    public function renderEmployeeEntity($empName)
    {
        return new Response("Single Employee name is: " . $empName);
    }
}
