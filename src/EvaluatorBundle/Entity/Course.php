<?php

namespace EvaluatorBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Course
 */
class Course
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;
	
	protected $student;
	
	public function __construct() {
		$this->$student = new ArrayCollection();
	}
	
	public function addStudent(\EvaluatorBundle\Entity\Student $student){
		$this->student[] = $student;
		return $this;
	}
	
	public function getStudent(){
		return $this->student;
	}
	
	 /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

