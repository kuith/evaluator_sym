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
	
	public function addPartialFinal($idCourse){
		$em = $this->getEntityManager();
		$partial = new Partial();
		$partial->setName("Final");
		$partial->setIdCourse($idCourse);
		$partial->setWeight(100);
		
		$em->persist($partial);
		$flush = $em->flush();
		
		return $flush;
	}
	
	public function addPArtial($idCourse, $name, $weight){
		$em = $this->getEntityManager();
		$partial = new Partial();
		$partial->setName($name);
		$partial->setIdCourse($idCourse);
		$partial->setWeight($weight);
		
		$em->persist($partial);
		$flush = $em->flush();
	}
	
}

