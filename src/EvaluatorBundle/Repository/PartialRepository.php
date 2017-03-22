<?php
namespace EvaluatorBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EvaluatorBundle\Entity\Partial;

class PartialRepository extends EntityRepository{
	
	public function findPartialsNoFinal($idCourse){
		return $this->getEntityManager()
			->createQuery(
				"SELECT p FROM EvaluatorBundle:Partial p
				WHERE p.idCourse = :idCourse AND p.name != :name
			")
			->setParameters(array('idCourse' => $idCourse,'name' => 'Final'))
			->getResult();
	}
	
	public function findPartialsFinal($idCourse){
		return $this->getEntityManager()
			->createQuery(
				"SELECT p FROM EvaluatorBundle:Partial p
				WHERE p.idCourse = :idCourse AND p.name = :name
			")
			->setParameters(array('idCourse' => $idCourse,'name' => 'Final'))
			->getResult();
	}
	
//	public function addPartial($name, $course, $weight){
//		$this->getEntityManager();
//		
//		$partial = new Partial();
//		$partial->setName($name);
//		$partial->setIdCourse($course);
//		$partial->setWeight($weight);
//		return $partial;
//	}
	
}
