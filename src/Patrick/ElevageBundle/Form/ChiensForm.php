<?php

namespace Patrick\ElevageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ChiensForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom du chien'))
            ->add('sexe', 'choice',
				array('choices' =>
					array(
						'M' => 'Male',
						'F' => 'Female'
					)
				)
			)
            ->add('chiot', 'choice',
				array('choices' =>
					array(
						'1' => 'Oui',
						'0' => 'Non'
					),
					'expanded' => true,
					'multiple' => false,
					'preferred_choices' => array('0')
				)
			)
            ->add('titre', 'text', array('label' => 'Un text à ajouter ...'))
            ->add('race', 'choice',
				array('choices' =>
					array(
						'1' => 'Bergers du Caucase',
						'2' => "Bergers d'Asie Centrale"
					)
				)
			)
        ;
    }

    public function getName()
    {
        return 'chiens';
    }
}
