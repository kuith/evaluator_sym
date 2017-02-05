<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EvaluatorBundle\Entity\User;
use EvaluatorBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller {
	
	private $session;
	public function __construct() {
		$this->session = new Session();
	}

	public function loginAction(Request $request) {
		$authenticationUtils = $this->get("security.authentication_utils");
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUserName = $authenticationUtils->getLastUsername();

		$user = new User();
		$form = $this->createForm(UserType::class, $user);
		$form->handleRequest($request);
		if( $form->isSubmitted()){ //para recoger el status para ser lanzado en la flash session
			if ($form->isValid()) {
				
				$em = $this->getDoctrine()->getEntityManager();
				$user_repo = $em->getRepository("EvaluatorBundle:User");
				$user = $user_repo->findOneBy(array("name" =>$form->get("name")->getData()));
				
				if(count($user) == 0){  //para comprobar si existe ya un usuario con un nombre determinado, así impedimos usuarios con mismo nombre (en este caso)
					$user = new User();
					$user->setName($form->get("name")->getData());

	//				Para incluir la contraseña cifrada en la BD
					$factory = $this->get("security.encoder_factory");
					$encoder = $factory->getEncoder($user);
					$password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());
					$user->setPassword($password);

					$user->setRole("ROLE_USER");

					$em = $this->getDoctrine()->getManager();
					$em->persist($user);
					$flush = $em->flush();
					if ($flush == null) {
						$status = "El usurio se ha creado correctamente";
					} else {
						$status = "No te has registrado correctamente";
					}
				} else {
					$status = "El usaurio ya existe !!";
				}
			} else {
				$status = "No te has registrado correctamente";
			}

			$this->session->getFlashBag()->add("status", $status);

		}
		return $this->render('EvaluatorBundle:User:login.html.twig', array(
					"error" => $error,
					"last_username" => $lastUserName,
					"form" => $form->createView()
		));
	}

}
