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
		$em->flush();
	}
	
	public function addPArtial($idCourse, $name, $weight){
		$em = $this->getEntityManager();
		$partial = new Partial();
		$partial->setName($name);
		$partial->setIdCourse($idCourse);
		$partial->setWeight($weight);
		
		$em->persist($partial);
		$em->flush();
	}
	
	public function findPartialsByCourse($idCourse){
		return $this->getEntityManager()
			->createQuery(
				"SELECT p FROM EvaluatorBundle:Partial p
				WHERE p.idCourse = :idCourse"
			)
			->setParameters(array('idCourse' => $idCourse))
			->getResult();
	}
	
	public function deletePartialsCourse($idCourse){
		$em = $this->getEntityManager();
		$partials = $this->findPartialsByCourse($idCourse);
		foreach ($partials as $partial){
			$em->remove($partial);
		}
		
		$em->flush();
	}
	
	public function deleteOnePartial($idPartial){
		$em = $this->getEntityManager();
		//$partial = $em->findOneById($idPartial);
		$query = $em->createQuery(
			"SELECT p FROM EvaluatorBundle:Partial p
			WHERE p.id = :idPartial"
		)
		->setParameters(array('idPartial' => $idPartial));
		$partial = $query->setMaxResults(1)->getOneOrNullResult();
		
		if (!$partial) {
	        throw $this->createNotFoundException(
			    'No se ha encontrado el parcial de id: '.$idPartial
		    );
	    }

		$em->remove($partial);
		$em->flush();
	}
}

