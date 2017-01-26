<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EvaluatorBundle\Entity\User;
use EvaluatorBundle\Form\UserType;

class UserController extends Controller {

	public function loginAction(Request $request) {
		$authenticationUtils = $this->get("security.authentication_utils");
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUserName = $authenticationUtils->getLastUsername();

		$user = new User();
		$form = $this->createForm(UserType::class, $user);
		$form->handleRequest($request);

		if ($form->isValid()) {
			$user = new User();
			$user->setName($form->get("name")->getData());
			$user->setPassword($form->get("password")->getData());

			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$flush = $em->flush();
			if ($flush == null) {
				$status = "El usurio se ha creado correctamente";
			} else {
				$status = "No te has registrado correctamente";
			}
		} else {
			$status = "No te has registrado correctamente";
		}


		return $this->render('EvaluatorBundle:User:login.html.twig', array(
					"error" => $error,
					"last_username" => $lastUserName,
					"form" => $form->createView()
		));
	}

}
