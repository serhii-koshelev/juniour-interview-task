<?php

namespace AppBundle\Controller;
use AppBundle\Entities\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EmployeeEntityController extends Controller
{


    /**
     * @Route("/employee/{id}")
     *
     */
    public function renderEmployeeEntity($id , Employee $employee)
    {
        if($employee!=null){
            return $this->render("employee/show.html.twig", [
                "employee" => $employee
            ]);
        }else{
            return new Response("Employee doesn't exist");
        }

    }

    /**
     * @Route("/employee/{empName}/salary")
     */
    public function renderEmployeeSalary($empName)
    {
        return new Response("Salary for" . $empName);
    }


    /**
     * @Route("/employee/{empName}/schedule")
     */
    public function renderEmployeeSchedule($empName)
    {
        return new Response("Here will be schedule for ".$empName);
    }

}
