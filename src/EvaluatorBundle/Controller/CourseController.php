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

	public function indexAction() {
		$em = $this->getDoctrine()->getManager();
		$course_repo = $em->getRepository("EvaluatorBundle:Course")->findAll();

		return $this->render("EvaluatorBundle:Course:index.html.twig", array(
					"courses" => $course_repo
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

	public function deleteAction($id) {
		$em = $this->getDoctrine()->getManager();
		$course_repo = $em->getRepository("EvaluatorBundle:Course");

		$course = $course_repo->find($id);
		$em->remove($course);
		$em->flush();

		return $this->redirectToRoute("evaluator_index_courses");
	}

	public function enterAction($id) {
		$em = $this->getDoctrine()->getManager();
		$course_repo = $em->getRepository("EvaluatorBundle:Course");
		$course = $course_repo->find($id);
		$students = $course->getStudent();

		$partials_no_final = $em->getRepository("EvaluatorBundle:Partial")->findPartialsNoFinal($id);
		$partial_final = $em->getRepository("EvaluatorBundle:Partial")->findPartialsFinal($id);
		
		$marks_no_final = $em->getRepository("EvaluatorBundle:Mark")->findMarksNoFinal($id,$partial_final);
		$marks_final = $em->getRepository("EvaluatorBundle:Mark")->findMarksFinal($id,$partial_final);

		return $this->render("EvaluatorBundle:Course:enter.html.twig", [
			"course" => $course,
			"students" => $students,
			"partials_no_final" => $partials_no_final,
			"partial_final" => $partial_final,
			"marks_no_final"=>$marks_no_final,
			"marks_final"=>$marks_final
		]);
	}

}
