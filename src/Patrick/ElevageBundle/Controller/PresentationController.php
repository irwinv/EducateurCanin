<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//Entity
use Patrick\ElevageBundle\Entity\Presentation;

//Formulaire
use Patrick\ElevageBundle\Form\PresentationForm;

class PresentationController extends Controller
{

	public function editAction($id = null){

		$msg = "";

		$em = $this->get('doctrine')->getEntityManager();

		if(isset($id)){
			$presentation = $em->find('PatrickElevageBundle:Presentation', $id);
		}

		else{
			$presentation = new Presentation();
		}

		$form = $this->get('form.factory')->create(new PresentationForm(), $presentation);

		$request = $this->get('request');

		if($request->getMethod() == 'POST'){

			$form->bindRequest($request);

			$recuptexte = $request->request->get('presentation');

			$presentation->setPresentation($recuptexte['presentation']);

			//Enregistrement de la presentation
			$em->persist($presentation);

			$em->flush();

			$msg = "Présentation ajoutée avec succès";
		}

		return $this->get('templating')->renderResponse('PatrickElevageBundle:Presentation:editer.html.twig',
			array('form' => $form->createView(),
				'msg' => $msg
			)
		);
	}
}
