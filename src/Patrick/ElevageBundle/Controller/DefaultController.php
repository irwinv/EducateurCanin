<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Patrick\ElevageBundle\Entity\Presentation;

class DefaultController extends Controller
{

    public function indexAction()
    {

		$em = $this->get('doctrine')->getEntityManager();
		$presentation = $em->getRepository('PatrickElevageBundle:Presentation')->findAll();

        return $this->get('templating')->renderResponse('PatrickElevageBundle:Default:index.html.twig',
			array(
			'presentation' => $presentation[0]->getPresentation(),
			'id' => $presentation[0]->getId())
		);
    }

	public function contactAction(){
        return $this->get('templating')->renderResponse('PatrickElevageBundle:Default:contact.html.twig');
	}
}
