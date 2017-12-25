<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entities\Employee;
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
        $em =$this->getDoctrine()->getManager();

        $employees=$em->getRepository('AppBundle:Employee')->findAll();

        return $this->render('employee/list.html.twig', [
            'employees' => $employees
        ]);
    }
}
