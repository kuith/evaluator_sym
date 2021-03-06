<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EvaluatorBundle\Controller\MarkController;


class AjaxController extends Controller{

	public function updatePartialAction(Request $request){
		if($request->isXmlHttpRequest()){
			$idMark = $request->query->get("idMark");
			$grade = $request->query->get("grade");
			var_dump($idMark);
			$em = $this->getDoctrine()->getManager();
			$mark = $em->getRepository("EvaluatorBundle:Mark")->find($idMark);
			
			if (!$mark) {
				throw $this->createNotFoundException(
					'No mark found for id '.$idMark
				);
			}
			
			$mark -> setGrade($grade);
		    $em->flush();
		}
	}
	

	public function updateFinalAction(){
		
	}
}
