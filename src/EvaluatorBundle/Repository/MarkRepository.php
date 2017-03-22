<?php
namespace EvaluatorBundle\Repository;

use Doctrine\ORM\EntityRepository;


class MarkRepository extends EntityRepository{
	//put your code here
	public function findMarksNoFinal($idCourse, $partialFinal){
		return $this->getEntityManager()
			->createQuery(
				"SELECT m FROM EvaluatorBundle:Mark m
				WHERE m.idCourse = :idCourse AND m.idPartial != :id"
			)
			->setParameters(array('idCourse' => $idCourse,'id' => $partialFinal[0]->getId()))
			->getResult();
	}
	
	public function findMarksFinal($idCourse, $partialFinal){
		return $this->getEntityManager()
			->createQuery(
				"SELECT m FROM EvaluatorBundle:Mark m
				WHERE m.idCourse = :idCourse AND m.idPartial = :id"
			)
			->setParameters(array('idCourse' => $idCourse,'id' => $partialFinal[0]->getId()))
			->getResult();
		
	}
}

