<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//		$em = $this->getDoctrine()->getManager();
//		$student_repo = $em->getRepository("EvaluatorBundle:Student");
//		$students = $student_repo->findAll();
//		
//		foreach ($students as $student){
//			echo $student->getName(). "<br/>";
//			echo $student->getIdCourse()->getName()."<br/> <hr/>";
//		}
	
		$em = $this->getDoctrine()->getManager();
		$course_repo = $em->getRepository("EvaluatorBundle:Course");
		$courses = $course_repo->findAll();
		
		foreach ($courses as $course){
			//echo $course->getName(). "<br/>";
			$students = $course->getStudent();
			
			foreach ($students as $student){
				echo $student->getName(). "<br/>";
			}
		}
		
		die();
		
        return $this->render('EvaluatorBundle:Default:index.html.twig');
    }
}
