<?php

namespace EvaluatorBundle\Entity;

/**
 * Partial
 */
class Partial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var \EvaluatorBundle\Entity\Courses
     */
    private $idCourse;
	
	 private $name;


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
     * Set weight
     *
     * @param integer $weight
     *
     * @return Partial
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set idCourse
     *
     * @param \EvaluatorBundle\Entity\Courses $idCourse
     *
     * @return Partial
     */
    public function setIdCourse(\EvaluatorBundle\Entity\Courses $idCourse = null)
    {
        $this->idCourse = $idCourse;

        return $this;
    }

    /**
     * Get idCourse
     *
     * @return \EvaluatorBundle\Entity\Courses
     */
    public function getIdCourse()
    {
        return $this->idCourse;
    }
	
	
	/**
     * Set name
     *
     * @param string $name
     *
     * @return Partial
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

