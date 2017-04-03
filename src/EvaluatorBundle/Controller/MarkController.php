<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EvaluatorBundle\Entity\Mark;
use EvaluatorBundle\Form\MarkType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class MarkController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}

//	public function courseMarksAction($idCourse, $idStudent, $idPartial) {
//		$em = $this->getDoctrine()->getManager();
//		$marks_repo = $em->getRepository("EvaluatorBundle:Mark");
//		$query = $marks_repo->createQueryBuilder('m')
//				->where('m.idCourse = ?1')
//				->andWhere('m.idStudent = ?2')
//				->andWhere('m.idPartial = ?3')
//				->setParameter(1, $idCourse)
//				->setParameter(2, $idStudent)
//				->setParameter(3, $idPartial)
//				->getQuery();
//		$mark = $query->setMaxResults(1)->getOneOrNullResult();
//
//		return $this->render("EvaluatorBundle:Mark:grid_marks.html.twig", array(
//					"mark" => $mark
//		));
//	}

}
