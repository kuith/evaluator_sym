<?php
namespace EvaluatorBundle\Repository;

use Doctrine\ORM\EntityRepository;
use EvaluatorBundle\Entity\Course;



class CourseRepository extends EntityRepository{

	public function addCourse($name){
		$em = $this->getEntityManager();
		$course = new Course();
		$course->setName($name);
		
		$em->persist($course);
		$flush = $em->flush();

		return $flush;
	}
	
	public function findIdCourseByName($name){
		return $this->getEntityManager()
			->createQuery(
				"SELECT c.id FROM EvaluatorBundle:Course c
				WHERE c.name = :name"
			)
			->setParameters(array('name' => $name))
			->getResult();
	}
}
