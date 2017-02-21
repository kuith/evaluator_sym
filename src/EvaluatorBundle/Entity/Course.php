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
	protected $partial;
	
	public function __construct() {
		$this->student = new ArrayCollection();
		$this->partial = new ArrayCollection();
	}
	
	public function addStudent(\EvaluatorBundle\Entity\Student $p_student){
		$this->student[] = $p_student;
		return $this;
	}
	
	public function getStudent(){
		return $this->student;
	}
	
	public function addPartial(\EvaluatorBundle\Entity\Partial $p_partial){
		$this->partial[] = $p_partial;
		return $this;
	}
	
	public function getPartial(){
		return $this->partial;
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

