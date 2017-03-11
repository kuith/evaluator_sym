<?php

namespace EvaluatorBundle\Entity;

/**
 * Student
 */
class Student
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \EvaluatorBundle\Entity\Course
     */
    private $idCourse;


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
     * @return Student
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

    /**
     * Set idCourse
     *
     * @param \EvaluatorBundle\Entity\Course $idCourse
     *
     * @return Student
     */
    public function setIdCourse(\EvaluatorBundle\Entity\Course $idCourse = null)
    {
        $this->idCourse = $idCourse;

        return $this;
    }

    /**
     * Get idCourse
     *
     * @return \EvaluatorBundle\Entity\Course
     */
    public function getIdCourse()
    {
        return $this->idCourse;
    }
}

