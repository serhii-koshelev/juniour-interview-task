<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\HttpFoundation\Response;

class EmployeeSalaryController extends Controller
{
    /**
     * @Route("/employee/{empName}/salary")
     */
    public function renderEmployeeSalary($empName)
    {
        return new Response("Salary for" . $empName);
    }
}
