<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EvaluatorBundle\Entity\Partial;
use EvaluatorBundle\Form\PartialType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use EvaluatorBundle\Entity\Course;

class PartialController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}
	
	public function addAction(Request $request, $id) {

		$partial = new Partial();
		$form = $this->createForm(PartialType::class, $partial);

		$form->handleRequest($request);
		
		if ($form->isSubmitted()) {
			if ($form->isValid()) {

				$em = $this->getDoctrine()->getManager();
				
				$course_repo = $em->getRepository("EvaluatorBundle:Course");
				$course = $course_repo->find($id);

				$partial = new Partial();
				$partial->setName($form->get("name")->getData());
				$partial->setIdCourse($course);
				$partial->setWeight($form->get("weight")->getData());

//			$em->getRepository("EvaluatorBundle:Partial")->addPartial($form->get("name")->getData(),$course, $form->get("weight")->getData());
				$em->persist($partial);
				$flush = $em->flush();

				if ($flush == null) {
					$status = "El parcial se ha dado de alta correctamente.";
				} else {
					$status = "Se ha producido un error al crear el parcial!!";
				}

				
			} else {
				$status = "El parcial no se ha podido dar de alta.";
			}
			$this->session->getFlashBag()->add("status", $status);
			return $this->redirectToRoute("evaluator_index_courses");
		}

		return $this->render("EvaluatorBundle:Partial:add.html.twig", array(
					"form" => $form->createView()
		));
	}
}


