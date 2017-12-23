<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EmployeeScheduleController extends Controller
{
    /**
     * @Route("/employee/{empName}/schedule")
     */
    public function renderEmployeeSchedule($empName)
    {
        return new Response("Here will be schedule for ".$empName);
    }
}
