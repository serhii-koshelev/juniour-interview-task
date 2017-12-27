<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 27.12.17
 * Time: 16:58
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\AddEmployee;

class EmployeeAdminController extends Controller
{
    /**
     * @Route("/admin/employee/add", name="admin_add_employee")
     */
        public function renderAddEmployeeForm(){

            $form=$this->createForm(AddEmployee::class);

            return $this->render('admin/employee/add.html.twig',[
                'addEmployeeForm' =>$form->createView()
            ]);
        }
}