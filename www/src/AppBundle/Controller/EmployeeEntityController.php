<?php

namespace AppBundle\Controller;
use AppBundle\Entities\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EmployeeEntityController extends Controller
{

    /**
     * @Route("/employee/new")
     */
    public function createEmployeeEntity(){
        $employee = new Employee();
        $employee->setName("Firstname");
        $employee->setSurname("Secondname");
        $employee->setRate(5);
        $employee->setFirstday("2017-12-29");
        $employee->setPosition("team lead");
        $employee->setAvatar("ava.jpg");

        $em = $this->getDoctrine()->getManager();
        $em->persist($employee);
        $em->flush();

        return new Response("Employee with name". $employee->getName(). " ". $employee->getSurname() . " and rate" . $employee->getRate() .
        " will work from " . date_format($employee->getFirstday(), 'd-n-y') . " day!");
    }

    /**
     * @Route("/employee/{empName}")
     *
     */
    public function renderEmployeeEntity($empName)
    {
        return $this->render("employee/show.html.twig", [
            "name" =>$empName
        ]);
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
