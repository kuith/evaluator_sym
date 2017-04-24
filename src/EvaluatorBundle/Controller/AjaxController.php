<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EvaluatorBundle\Entity\Mark;


/**
 * Description of AjaxController
 *
 * @author kuith
 */
class AjaxController extends Controller{

	public function updatePartialAction(Request $request){
		if($request->isXmlHttpRequest()){
			//$var=$request->query->get("idCourse");
			//$var=$request->query->get("gradeBefore");
			$idMark = $request->query->get("idMark");
			$grade = $request->query->get("grade");
			var_dump("GET:".$grade);

			$em = $this->getDoctrine()->getManager();
			$mark = $em->getRepository('evaluatorBundle:Mark')->find($idMark);
			$mark -> setGrade($grade);
		    $em->flush();
			die();
		}
	}
	

	public function updateFinalAction(){
		
	}
}
