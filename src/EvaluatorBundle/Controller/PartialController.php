<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EvaluatorBundle\Entity\Partial;
use EvaluatorBundle\Form\PartialType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

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
				
				$flush = $em->getRepository("EvaluatorBundle:Partial")->addPArtial($course, $form->get("name")->getData(), $form->get("weight")->getData());

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
	
	public function deleteAction($idPartial, $idCourse){
		$em = $this->getDoctrine()->getMAnager();
		$em ->getRepository("EvaluatorBundle:Mark")->deleteMarksPartial($idPartial);
		$em ->getRepository("EvaluatorBundle:Partial")->deleteOnePartial($idPartial);
		return $this->redirectToRoute("evaluator_enter_course", array("id"=>$idCourse));
	}
}

