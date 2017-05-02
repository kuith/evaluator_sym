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
}
