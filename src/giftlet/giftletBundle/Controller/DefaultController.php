<?php

namespace giftlet\giftletBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('giftletBundle:Default:index.html.twig', array('name' => $name));
    }
}
