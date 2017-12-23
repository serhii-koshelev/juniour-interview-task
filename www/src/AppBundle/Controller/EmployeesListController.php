<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EmployeesListController extends Controller
{
    /**
     * @Route("/employees")
     */
    public function renderEmployeesList()
    {
        return new Response("Employee's List");
    }
}
