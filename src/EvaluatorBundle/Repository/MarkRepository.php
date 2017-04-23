<?php
namespace EvaluatorBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MarkRepository extends EntityRepository{
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
	
	public function findMarksByPartial($idPartial){
		return $this->getEntityManager()
			->createQuery(
				"SELECT m FROM EvaluatorBundle:Mark m
				WHERE m.idPartial = :idPartial"
			)
			->setParameters(array('idPartial' => $idPartial))
			->getResult();
	}
	
	
	public function deleteMarksPartial($idPartial){
		$em = $this->getEntityManager();
		$marks = $this->findMarksByPartial($idPartial);
		foreach ($marks as $mark){
			$em->remove($mark);
		}
		
		$em->flush();
	}
	
	public function updateMark($idMark, $newGrade){
		$em = $this->etEntityManager();
		$mark = $this->find($idMark);
		
		if (!$mark) {
			throw $this->createNotFoundException(
				'No mark found for id '.$idMark
			);
		}
		
		$mark->setGrade($newGrade);
		$em->flush();
	}
	
}

