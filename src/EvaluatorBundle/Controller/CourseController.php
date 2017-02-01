<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EvaluatorBundle\Entity\Course;
use EvaluatorBundle\Form\CourseType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class CourseController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}

	public function addAction(Request $request) {

		$course = new Course();
		$form = $this->createForm(CourseType::class, $course);

		$form->handleRequest($request);

		if ($form->isSubmitted()) {
			if ($form->isValid()) {
//			aqui irá la lógica pra dar de alta el nuevo curso
				$status = "El curso se ha dado de alta correctamente.";
			} else {
				$status = "El curso no se ha podido dar de alta.";
			}
			$this->session->getFlashBag()->add("status", $status);
		}





		return $this->render("EvaluatorBundle:Course:add.html.twig", array(
					"form" => $form->createView()
		));
	}

}
