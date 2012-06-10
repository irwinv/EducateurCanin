<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;

//Entity
use Patrick\ElevageBundle\Entity\Chiens;

//Formulaire
use Patrick\ElevageBundle\Form\ChiensForm;

class ChiensController extends ContainerAware
{

	public function ajoutAction(){

		$msg = "";

		$em = $this->container->get('doctrine')->getEntityManager();

		$form = $this->container->get('form.factory')->create(new ChiensForm(), new Chiens);

		return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Chiens:ajout.html.twig',
			array('form' => $form->createView(),
				'msg' => $msg
			)
		);

	}
}
