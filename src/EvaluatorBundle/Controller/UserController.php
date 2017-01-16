<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function loginAction(Request $request)
    {
		$authenticationUtils = $this->get("security.authentication_utils");
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUserName = $authenticationUtils->getLastUsername();
		
        return $this->render('EvaluatorBundle:user:login.html.twig', array(
			"error" => $error,
			"last_username" => $lastUserName
		));
    }
}
