<?php

namespace Patrick\ElevageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ConcoursForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array('label' => 'Titre ou nom du concour'))
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
        return 'concours';
    }
}
