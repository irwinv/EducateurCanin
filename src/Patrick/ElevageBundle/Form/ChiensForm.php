<?php

namespace Patrick\ElevageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ChiensForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('sexe')
            ->add('chiot')
            ->add('titre')
            ->add('race')
        ;
    }

    public function getName()
    {
        return 'chiens';
    }
}
