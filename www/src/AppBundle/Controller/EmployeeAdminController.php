<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 27.12.17
 * Time: 16:58
 */

namespace AppBundle\Controller;


use AppBundle\Entities\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\AddEmployee;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EmployeeAdminController extends Controller
{
    /**
     * @Route("/admin/employee/add", name="admin_add_employee")
     */
        public function renderAddEmployeeForm(Request $request){

            //$dir =
            $form = $this->createForm(AddEmployee::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //$filename = null;
                $employee = $form->getData();
                //$file = $form['avatarFileName']->getData();
                //$file->move($dir, $filename->getClientOriginalName());

                $em = $this->getDoctrine()->getManager();
                $em->persist($employee);
                $em->flush();

                $this->addFlash('success','New Employee Created!');

                return $this->redirectToRoute('employees');
            }

            return $this->render('admin/employee/add.html.twig',[
                'addEmployeeForm' =>$form->createView()
            ]);
        }
}