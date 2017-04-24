<?php

namespace EvaluatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of AjaxController
 *
 * @author kuith
 */
class AjaxController extends Controller{

	public function updatePartialAction(Request $request){
		if($request->isXmlHttpRequest()){
			
		}
	}
	
	public function updateFinalAction(){
		
	}
}
