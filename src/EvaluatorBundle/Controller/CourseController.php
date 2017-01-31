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

public function addAction(Request $request){
	
	$course = new Course();
	$form = $this->createForm(CourseType::class, $course);
	
	return $this->render("EvaluatorBundle:Course:add.html.twig", array(
		"form" => $form->createView()
	));
}
	

}
