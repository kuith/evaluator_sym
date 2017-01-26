<?php

namespace EvaluatorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
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
			->add('password', PasswordType::class, array("label"=>"Contraseña", "required"=>"required", "attr"=>array(
				"class"=>"form-password form-control",
			)))
			->add('guardar', SubmitType::class, array("attr"=>array(
				"class"=>"form-submit btn btn-success",
			)))
		;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EvaluatorBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'evaluatorbundle_user';
    }


}
