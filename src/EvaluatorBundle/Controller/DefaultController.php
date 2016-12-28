<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		echo("holita");
		die();
		
        return $this->render('EvaluatorBundle:default:index.html.twig');
    }
}
