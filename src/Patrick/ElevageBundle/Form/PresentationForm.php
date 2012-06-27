<?php

namespace Patrick\ElevageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PresentationForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('presentation', 'textarea', array('label' => "Texte de présentaion (Page d'accueil)"))
        ;
    }

    public function getName()
    {
        return 'presentation';
    }
}
