<?php

namespace EvaluatorBundle\Entity;

/**
 * Mark
 */
class Mark
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $grade;

    /**
     * @var \EvaluatorBundle\Entity\Courses
     */
    private $idCourse;

    /**
     * @var \EvaluatorBundle\Entity\Partials
     */
    private $idPartial;

    /**
     * @var \EvaluatorBundle\Entity\Students
     */
    private $idStudent;


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
     * Set grade
     *
     * @param float $grade
     *
     * @return Mark
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return float
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set idCourse
     *
     * @param \EvaluatorBundle\Entity\Courses $idCourse
     *
     * @return Mark
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
     * Set idPartial
     *
     * @param \EvaluatorBundle\Entity\Partials $idPartial
     *
     * @return Mark
     */
    public function setIdPartial(\EvaluatorBundle\Entity\Partials $idPartial = null)
    {
        $this->idPartial = $idPartial;

        return $this;
    }

    /**
     * Get idPartial
     *
     * @return \EvaluatorBundle\Entity\Partials
     */
    public function getIdPartial()
    {
        return $this->idPartial;
    }

    /**
     * Set idStudent
     *
     * @param \EvaluatorBundle\Entity\Students $idStudent
     *
     * @return Mark
     */
    public function setIdStudent(\EvaluatorBundle\Entity\Students $idStudent = null)
    {
        $this->idStudent = $idStudent;

        return $this;
    }

    /**
     * Get idStudent
     *
     * @return \EvaluatorBundle\Entity\Students
     */
    public function getIdStudent()
    {
        return $this->idStudent;
    }
}

