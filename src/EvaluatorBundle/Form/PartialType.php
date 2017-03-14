<?php

namespace EvaluatorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PartialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('name', TextType::class, array("label"=>"Nombre", "required"=>"required", "attr"=>array(
				"class"=>"form-name form-control",
			)))
			->add('weight', IntegerType::class, array("label"=>"Peso", "required"=>"required", "attr"=>array(
				"class"=>"form-name form-control",
			)))	
			->add('guardar', SubmitType::class, array("attr" => array(
				"class" => "form-submit btn btn-success",
			)))
		;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EvaluatorBundle\Entity\Partial'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'evaluatorbundle_partial';
    }


}
