<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EvaluatorBundle\Controller\MarkController;


/**
 * Description of AjaxController
 *
 * @author kuith
 */
class AjaxController extends Controller{

	public function updatePartialAction(Request $request){
		if($request->isXmlHttpRequest()){
			$idMark = $request->query->get("idMark");
			$grade = $request->query->get("grade");
			

			$em = $this->getDoctrine()->getManager();
			$mark = $em->getRepository('EvaluatorBundle:Mark')->findOneBy(array('id' => $idMark));
			$mark -> setGrade($grade);
		    $em->flush();
			die();
		}
	}
	

	public function updateFinalAction(){
		
	}
}
