<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;

//Entity
use Patrick\ElevageBundle\Entity\Chiens;
use Patrick\ElevageBundle\Entity\Images;

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

			$file = $request->files->get('img')->getClientOriginalName();

			$path = __DIR__."/../../../../web/upload";

			//Des images liée au chien.
			$img = new Images();
			$img->setImg($file);

			//OneToMany
			$chiens->addImages($img);

			//Faire la relation entre les 2 tables
			$img->setChien($chiens);

			//enregistrement du chien
			$em->persist($chiens);
			$em->persist($img);
			$em->flush();

			//Enregistrement du fichier.
			$request->files->get('img')->move($path, $file);
			$msg = "Chien ajouté avec succès";
		}

		return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Chiens:ajout.html.twig',
			array('form' => $form->createView(),
				'msg' => $msg
			)
		);

	}

	public function showAction($id = null, $chiot = 0){

		$msg = "";

		$em = $this->container->get('doctrine')->getEntityManager();

		//Listage de tout les chiens.
		if ($chiot == 0){

			$chiens = $em->getRepository('PatrickElevageBundle:Chiens')->findBy(
				array('race' => $id)
			);
		}

		//Listage uniquement des chiots
		else{
			$chiens = $em->getRepository('PatrickElevageBundle:Chiens')->findBy(
				array('race' => $id, 'chiot' =>$chiot)
			);
		}

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
