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

	public function indexAction(){
		$em = $this->getDoctrine()->getManager();
		$course_repo = $em->getRepository("EvaluatorBundle:Course");
		$courses = $course_repo->findAll();
		
		return $this->render("EvaluatorBundle:Course:index.html.twig", array(
			"courses" => $courses	
		));
	}
	
	
	public function addAction(Request $request) {

		$course = new Course();
		$form = $this->createForm(CourseType::class, $course);

		$form->handleRequest($request);

		if ($form->isSubmitted()) {
			if ($form->isValid()) {

				$em = $this->getDoctrine()->getManager();

				$course = new Course();
				$course->setName($form->get("name")->getData());

				$em->persist($course);
				$flush = $em->flush();

				if ($flush == null) {
					$status = "El curso se ha dado de alta correctamente.";
				} else {
					$status = "Se ha producido un error al crear el curso!!";
				}
			} else {
				$status = "El curso no se ha podido dar de alta.";
			}
			$this->session->getFlashBag()->add("status", $status);
			return $this->redirectToRoute("evaluator_index_courses");
		}


		return $this->render("EvaluatorBundle:Course:add.html.twig", array(
			"form" => $form->createView()
		));
	}
	
	public function deleteAction($id){
		$em = $this->getDoctrine()->getManager();
		$course_repo = $em->getRepository("EvaluatorBundle:Course");
		
		$course = $course_repo->find($id);
		$em->remove($course);
		$em->flush();
		
		return $this->redirectToRoute("evaluator_index_courses");
	}

}
