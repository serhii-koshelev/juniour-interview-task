<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 26.12.17
 * Time: 17:53
 */

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Employees', array('route' => 'employees'));
        $menu->addChild('Log in', array('route'=> 'login'));

        return $menu;
    }
}