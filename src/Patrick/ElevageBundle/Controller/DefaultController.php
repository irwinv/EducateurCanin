<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {

		$message = "Meh";

        return $this->get('templating')->renderResponse('PatrickElevageBundle:Default:index.html.twig',
			array('message' => $message)
		);
    }

	public function contactAction(){
        return $this->get('templating')->renderResponse('PatrickElevageBundle:Default:contact.html.twig');
	}
}
