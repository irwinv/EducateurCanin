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

		$chiens = new Chiens();

		$form = $this->container->get('form.factory')->create(new ChiensForm(), $chiens);

		$request = $this->container->get('request');

		if($request->getMethod() == 'POST'){

			$form->bindRequest($request);

			//enregistrement du chien
			$em->persist($chiens);
			$em->flush();
			$msg = "Chien ajouté avec succès";
		}

		return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Chiens:ajout.html.twig',
			array('form' => $form->createView(),
				'msg' => $msg
			)
		);

	}

	public function showAction($id = null){

		$msg = "";

		$em = $this->container->get('doctrine')->getEntityManager();

		$chiens = $em->getRepository('PatrickElevageBundle:Chiens')->findBy(
			array('race' => $id)
		);

		if(!$chiens){
			$msg = "Il y n'y a pas de chien disponible pour cette race";
		}

		return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Chiens:show.html.twig',
			array(
				'chiens' => $chiens,
				'msg' => $msg
			)
		);

	}
}
