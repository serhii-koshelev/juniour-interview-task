<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 27.12.17
 * Time: 16:44
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddEmployee extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name')
            ->add('surname')
            ->add('position')
            ->add('rate')
            ->add('firstWorkingDay')
            ->add('avatarFileName');
    }

    public function configureOption(OptionsResolver $resolver){

    }
}