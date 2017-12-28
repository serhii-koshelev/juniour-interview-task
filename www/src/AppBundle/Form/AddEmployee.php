<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 27.12.17
 * Time: 16:44
 */

namespace AppBundle\Form;


use AppBundle\Entities\Employee;
use \Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class AddEmployee extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name')
            ->add('surname')
            ->add('position')
            ->add('rate')
            ->add('firstDay', DateType::class,[
                'widget'=>'single_text'
            ])
            ->getForm()//, DateType::class, [
            //'widget' => 'single_text'
        //])
            ->add('avatarFileName');//FileType::class
    }

    public function configureOptions(OptionsResolver $resolver){

        $resolver->setDefaults([
            "data_class" => "AppBundle\Entities\Employee"
        ]);
    }
}